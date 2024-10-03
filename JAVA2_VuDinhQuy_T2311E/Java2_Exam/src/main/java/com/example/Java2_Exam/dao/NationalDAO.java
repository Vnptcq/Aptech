package com.example.Java2_Exam.dao;

import com.example.Java2_Exam.database.DatabaseConnection;
import com.example.Java2_Exam.entities.National;
import com.example.Java2_Exam.entities.Player;

import java.sql.Connection;
import java.sql.PreparedStatement;
import java.sql.SQLException;

public class NationalDAO {
    public void insertNational(National national) {
        String sql = "INSERT INTO National (NationalId, NationalName) VALUES (?, ?)";
        try (Connection conn = DatabaseConnection.getConnection();
             PreparedStatement pstmt = conn.prepareStatement(sql)) {

            pstmt.setInt(1, national.getNationalId());
            pstmt.setString(2, national.getNationalName());

            pstmt.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }

    public void deleteNational(int nationalId) {
        String sql = "DELETE FROM National WHERE NationalId = ?";
        try (Connection conn = DatabaseConnection.getConnection();
             PreparedStatement pstmt = conn.prepareStatement(sql)) {

            pstmt.setInt(1, nationalId);
            pstmt.executeUpdate();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}
