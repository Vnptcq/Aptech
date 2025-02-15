import argparse # để chuyển giữ API và CLI
import json
from flask_cors import CORS
from flask import Flask, request, jsonify
from pymongo import MongoClient

client = MongoClient("mongodb://localhost:27017/")
db = client["eShop"]
collection = db["OrderCollection"]

orders = [
    {
        "orderid": 1,
        "products": [
            {"product_id": "quanau", "product_name": "quần au", "size": "XL", "price": 10.5, "quantity": 1},
            {"product_id": "somi", "product_name": "áo sơ mi", "size": "XL", "price": 10.5, "quantity": 2},
            {"product_id": "jacket", "product_name": "áo khoác", "size": "L", "price": 20.0, "quantity": 1}
        ],
        "totalamount": 51,
        "delivery_address": "Hanoi"
    },
    {
        "orderid": 2,
        "products": [
            {"product_id": "somi", "product_name": "áo sơ mi", "size": "L", "price": 9.5, "quantity": 1},
            {"product_id": "jacket", "product_name": "áo khoác", "size": "M", "price": 15.0, "quantity": 1},
            {"product_id": "scarf", "product_name": "khăn quàng", "size": "F", "price": 7.0, "quantity": 2}
        ],
        "totalamount": 38.5,
        "delivery_address": "Danang"
    },
    {
        "orderid": 3,
        "products": [
            {"product_id": "jeans", "product_name": "quần jeans", "size": "M", "price": 20.0, "quantity": 1},
            {"product_id": "tshirt", "product_name": "áo thun", "size": "S", "price": 8.5, "quantity": 3},
            {"product_id": "belt", "product_name": "thắt lưng", "size": "F", "price": 12.0, "quantity": 1}
        ],
        "totalamount": 57.5,
        "delivery_address": "Ho Chi Minh"
    },
    {
        "orderid": 4,
        "products": [
            {"product_id": "vest", "product_name": "áo vest", "size": "XL", "price": 50.0, "quantity": 1},
            {"product_id": "somi", "product_name": "áo sơ mi", "size": "M", "price": 10.5, "quantity": 1},
            {"product_id": "tie", "product_name": "caravat", "size": "F", "price": 15.0, "quantity": 1}
        ],
        "totalamount": 75.5,
        "delivery_address": "Da Nang"
    },
    {
        "orderid": 5,
        "products": [
            {"product_id": "sweater", "product_name": "áo len", "size": "L", "price": 18.0, "quantity": 2},
            {"product_id": "gloves", "product_name": "găng tay", "size": "F", "price": 5.0, "quantity": 1}
        ],
        "totalamount": 41,
        "delivery_address": "Can Tho"
    },
    {
        "orderid": 6,
        "products": [
            {"product_id": "shorts", "product_name": "quần short", "size": "XL", "price": 15.0, "quantity": 2},
            {"product_id": "hat", "product_name": "mũ", "size": "F", "price": 5.0, "quantity": 1},
            {"product_id": "sandals", "product_name": "dép", "size": "42", "price": 20.0, "quantity": 1}
        ],
        "totalamount": 55,
        "delivery_address": "Hai Phong"
    }
]

def insert_demo_data():
    insert_result = collection.insert_many(orders)
    print("Inserted IDs:", insert_result.inserted_ids)

def get_next_orderid():
    """
    Lấy orderid lớn nhất hiện có và tăng thêm 1.
    Nếu chưa có đơn hàng nào, bắt đầu từ 1.
    """
    last_order = collection.find_one(sort=[("orderid", -1)])
    return (last_order["orderid"] + 1) if last_order else 1

def insert_order(data):
    """
    Thêm đơn hàng vào MongoDB với orderid tự động tăng.
    Tính lại totalamount dựa trên các sản phẩm.
    """
    try:
        new_orderid = get_next_orderid()
        data["orderid"] = new_orderid

        if "products" in data:
            data["totalamount"] = sum(p["price"] * p["quantity"] for p in data["products"])
        else:
            data["totalamount"] = 0

        collection.insert_one(data)
        return {"message": "Order added successfully", "orderid": new_orderid}
    except Exception as e:
        return {"error": str(e)}

def update_order_address(orderid, new_address):
    try:
        result = collection.update_one({"orderid": orderid}, {"$set": {"delivery_address": new_address}})
        if result.matched_count == 0:
            return {"message": "Order not found"}
        return {"message": "Delivery address updated"}
    except Exception as e:
        return {"error": str(e)}

def delete_order_by_id(orderid):
    try:
        result = collection.delete_one({"orderid": orderid})
        if result.deleted_count == 0:
            return {"message": "Order not found"}
        return {"message": "Order deleted"}
    except Exception as e:
        return {"error": str(e)}

def get_all_orders():
    try:
        orders = []
        for order in collection.find({}, {"_id": 0}):
            orders.append(order)
        return orders
    except Exception as e:
        return {"error": str(e)}

def calculate_order_total(orderid):
    try:
        order = collection.find_one({"orderid": orderid})
        if not order:
            return {"message": "Order not found"}
        products = order.get("products", [])
        recalculated_total = sum(p["price"] * p["quantity"] for p in products)
        return {"orderid": orderid, "recalculated_total": recalculated_total}
    except Exception as e:
        return {"error": str(e)}

def count_somi_products():
    try:
        total_somi = 0
        for order in collection.find({}, {"products": 1, "_id": 0}):
            for p in order.get("products", []):
                if p.get("product_id") == "somi":
                    total_somi += p.get("quantity", 0)
        return {"total_somi": total_somi}
    except Exception as e:
        return {"error": str(e)}

app = Flask(__name__)
CORS(app)

@app.route('/')
def home():
    return "Welcome to eShop API!"

@app.route('/add_order', methods=['POST'])
def api_add_order():
    data = request.get_json()
    result = insert_order(data)
    if "error" in result:
        return jsonify(result), 400
    return jsonify(result), 201

@app.route('/get_orders', methods=['GET'])
def api_get_orders():
    orders = get_all_orders()
    if isinstance(orders, dict) and "error" in orders:
        return jsonify(orders), 400
    return jsonify(orders), 200

@app.route('/update_address/<int:orderid>', methods=['PUT'])
def api_update_address(orderid):
    data = request.get_json()
    new_address = data.get("delivery_address")
    if not new_address:
        return jsonify({"error": "delivery_address is required"}), 400
    result = update_order_address(orderid, new_address)
    if "error" in result:
        return jsonify(result), 400
    return jsonify(result), 200

@app.route('/delete_order/<int:orderid>', methods=['DELETE'])
def api_delete_order(orderid):
    result = delete_order_by_id(orderid)
    if "error" in result:
        return jsonify(result), 400
    if result.get("message") == "Order not found":
        return jsonify(result), 404
    return jsonify(result), 200

@app.route('/calculate_total/<int:orderid>', methods=['GET'])
def api_calculate_total(orderid):
    result = calculate_order_total(orderid)
    if "error" in result:
        return jsonify(result), 400
    if result.get("message") == "Order not found":
        return jsonify(result), 404
    return jsonify(result), 200

@app.route('/count_somi', methods=['GET'])
def api_count_somi():
    result = count_somi_products()
    if "error" in result:
        return jsonify(result), 400
    return jsonify(result), 200

def cli_menu():
    while True:
        print("\n========== MENU ==========")
        print("1) Insert order")
        print("2) Insert demo order")
        print("3) Update delivery_address")
        print("4) Delete order")
        print("5) Read all orders")
        print("6) Calculate total for an order")
        print("7) Count product 'somi' quantity")
        print("8) Exit")
        choice = input("Enter your choice: ").strip()

        if choice == "1":
            try:
                new_orderid = get_next_orderid()
                print(f"Thêm đơn hàng với orderid: {new_orderid}")
                products = []
                product_count = int(input("Bạn muốn thêm bao nhiêu sản phẩm cho order này? "))
                for i in range(product_count):
                    print(f"\n--- Sản phẩm thứ {i+1} ---")
                    product_id = input("  Nhập product_id: ")
                    product_name = input("  Nhập product_name: ")
                    size = input("  Nhập size: ")
                    price = float(input("  Nhập price: "))
                    quantity = int(input("  Nhập quantity: "))
                    products.append({
                        "product_id": product_id,
                        "product_name": product_name,
                        "size": size,
                        "price": price,
                        "quantity": quantity
                    })
                delivery_address = input("\nNhập delivery_address: ")

                order = {
                    "products": products,
                    "delivery_address": delivery_address
                }
                # insert_order() sẽ tự tính totalamount và thêm orderid
                result = insert_order(order)
                if "error" in result:
                    print("Lỗi:", result["error"])
                else:
                    print(result["message"], "| orderid:", result["orderid"])
            except Exception as e:
                print("Lỗi:", e)
        elif choice == "2":
            insert_demo_data()
            print("Thêm dữ liệu mẫu thành công!")
        elif choice == "3":
            try:
                orderid = int(input("Nhập orderid cần cập nhật: "))
                new_address = input("Nhập địa chỉ mới: ")
                result = update_order_address(orderid, new_address)
                print(result.get("message", result))
            except Exception as e:
                print("Lỗi:", e)

        elif choice == "4":
            try:
                orderid = int(input("Nhập orderid cần xóa: "))
                result = delete_order_by_id(orderid)
                print(result.get("message", result))
            except Exception as e:
                print("Lỗi:", e)

        elif choice == "5":
            orders = get_all_orders()
            if isinstance(orders, dict) and "error" in orders:
                print("Lỗi:", orders["error"])
            else:
                for order in orders:
                    print("\n===============================")
                    print(f"Order ID: {order.get('orderid')}")
                    print(f"Delivery Address: {order.get('delivery_address')}")
                    print(f"Total Amount: {order.get('totalamount')}")
                    products = order.get("products", [])
                    print("----- Danh sách sản phẩm -----")
                    print("No | product_name      | quantity | price")
                    for idx, p in enumerate(products, start=1):
                        print(f"{idx:2} | {p.get('product_name'):<18} | {p.get('quantity'):>8} | {p.get('price'):>5}")
                print("\n===== Kết thúc danh sách =====")
        elif choice == "6":
            try:
                orderid = int(input("Nhập orderid để tính total: "))
                result = calculate_order_total(orderid)
                if "message" in result and result["message"] == "Order not found":
                    print(result["message"])
                else:
                    print(f"Recalculated total for orderid {orderid}: {result.get('recalculated_total')}")
            except Exception as e:
                print("Lỗi:", e)
        elif choice == "7":
            result = count_somi_products()
            if "error" in result:
                print("Lỗi:", result["error"])
            else:
                print("Tổng số sản phẩm 'somi':", result.get("total_somi"))
        elif choice == "8":
            print("Goodbye!")
            break
        else:
            print("Lựa chọn không hợp lệ, vui lòng nhập lại.")

if __name__ == '__main__':
    parser = argparse.ArgumentParser(description="Chạy eShop dưới dạng API hoặc CLI.")
    parser.add_argument(
        '--mode',
        choices=['cli', 'api'],
        default='cli',
        help="Chọn chế độ chạy: 'cli' (mặc định) hoặc 'api'."
    )
    args = parser.parse_args()

    if args.mode == 'cli':
        cli_menu()
    else:
        print("Running API server at http://127.0.0.1:5000/")
        app.run(debug=True)
