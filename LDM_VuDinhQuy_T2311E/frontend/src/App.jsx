import React, { useEffect, useState } from "react";

function App() {
  const [items, setItems] = useState([]);
  const [newItem, setNewItem] = useState({ name: "", description: "", price: "", quantity: "" });
  const [editingItemId, setEditingItemId] = useState(null);
  const [editValues, setEditValues] = useState({});

  const fetchItems = async () => {
    try {
      const res = await fetch("http://localhost:5000/api/items");
      const data = await res.json();
      console.log("Fetched items:", data);
      setItems(data);
    } catch (error) {
      console.error("Error fetching items:", error);
    }
  };

  useEffect(() => {
    fetchItems();
  }, []);

  const addItem = async () => {
    if (!newItem.name || !newItem.description || !newItem.price || !newItem.quantity) return;
    console.log("Adding item:", newItem);
    try {
      const res = await fetch("http://localhost:5000/api/items", {
        method: "POST",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(newItem),
      });
      if (res.ok) {
        await fetchItems();
        setNewItem({ name: "", description: "", price: "", quantity: "" });
      }
    } catch (error) {
      console.error("Error adding item:", error);
    }
  };

  const deleteItem = async (id) => {
    try {
      const res = await fetch(`http://localhost:5000/api/items/${id}`, {
        method: "DELETE",
      });
      if (res.ok) await fetchItems();
    } catch (error) {
      console.error("Error deleting item:", error);
    }
  };

  const startEditing = (item) => {
    setEditingItemId(item._id);
    setEditValues({ ...item });
  };

  const handleEditChange = (e, field) => {
    setEditValues({ ...editValues, [field]: e.target.value });
  };

  const saveEdit = async () => {
    try {
      console.log("Updating item:", editValues);
      const res = await fetch(`http://localhost:5000/api/items/${editingItemId}`, {
        method: "PUT",
        headers: { "Content-Type": "application/json" },
        body: JSON.stringify(editValues),
      });
      if (res.ok) {
        await fetchItems();
        setEditingItemId(null);
      }
    } catch (error) {
      console.error("Error updating item:", error);
    }
  };

  return (
    <div className="min-h-screen flex flex-col items-center bg-gray-100 py-10">
      <h1 className="text-3xl font-bold mb-6">Phone</h1>
      <table className="w-3/4 bg-white shadow-lg rounded-lg overflow-hidden">
        <thead className="bg-gray-200">
          <tr>
            <th className="p-3">ID</th>
            <th className="p-3">Name</th>
            <th className="p-3">Description</th>
            <th className="p-3">Price</th>
            <th className="p-3">Quantity</th>
            <th className="p-3">Actions</th>
          </tr>
        </thead>
        <tbody>
          {items.map((item, index) => (
            <tr key={item._id} className={index % 2 === 0 ? "bg-gray-100" : "bg-white"}>
              <td className="p-3">{index + 1}</td>
              {editingItemId === item._id ? (
                <>
                  <td className="p-3"><input type="text" value={editValues.name} onChange={(e) => handleEditChange(e, "name")} className="border p-1 rounded w-full" /></td>
                  <td className="p-3"><input type="text" value={editValues.description} onChange={(e) => handleEditChange(e, "description")} className="border p-1 rounded w-full" /></td>
                  <td className="p-3"><input type="number" value={editValues.price} onChange={(e) => handleEditChange(e, "price")} className="border p-1 rounded w-full" /></td>
                  <td className="p-3"><input type="number" value={editValues.quantity} onChange={(e) => handleEditChange(e, "quantity")} className="border p-1 rounded w-full" /></td>
                  <td className="p-3">
                    <button onClick={saveEdit} className="bg-green-500 text-white px-3 py-1 rounded mr-2">Save</button>
                    <button onClick={() => setEditingItemId(null)} className="bg-gray-500 text-white px-3 py-1 rounded">Cancel</button>
                  </td>
                </>
              ) : (
                <>
                  <td className="p-3">{item.name}</td>
                  <td className="p-3">{item.description}</td>
                  <td className="p-3">${item.price}</td>
                  <td className="p-3">{item.quantity}</td>
                  <td className="p-3">
                    <button onClick={() => startEditing(item)} className="bg-yellow-500 text-white px-3 py-1 rounded mr-2">Edit</button>
                    <button onClick={() => deleteItem(item._id)} className="bg-red-500 text-white px-3 py-1 rounded">Delete</button>
                  </td>
                </>
              )}
            </tr>
          ))}
        </tbody>
      </table>

      <div className="mt-6">
        <h2 className="text-xl font-bold mb-2">Add New Item</h2>
        <div className="flex gap-3">
          <input type="text" placeholder="Name" value={newItem.name} onChange={(e) => setNewItem({ ...newItem, name: e.target.value })} className="border p-2 rounded" />
          <input type="text" placeholder="Description" value={newItem.description} onChange={(e) => setNewItem({ ...newItem, description: e.target.value })} className="border p-2 rounded" />
          <input type="number" placeholder="Price" value={newItem.price} onChange={(e) => setNewItem({ ...newItem, price: e.target.value })} className="border p-2 rounded" />
          <input type="number" placeholder="Quantity" value={newItem.quantity} onChange={(e) => setNewItem({ ...newItem, quantity: e.target.value })} className="border p-2 rounded" />
          <button className="bg-green-600 text-white px-4 py-2 rounded" onClick={addItem}>Add Item</button>
        </div>
      </div>
    </div>
  );
}

export default App;
