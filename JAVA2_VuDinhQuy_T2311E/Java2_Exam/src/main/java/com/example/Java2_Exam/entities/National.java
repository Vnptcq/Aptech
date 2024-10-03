package com.example.Java2_Exam.entities;

public class National {
    private int nationalId;       // Auto-generated in the database
    private String nationalName;  // Nationality name

    public National(int nationalId, String nationalName) {
        this.nationalId = nationalId;
        this.nationalName = nationalName;
    }

    public int getNationalId() { return nationalId; }
    public void setNationalId(int nationalId) { this.nationalId = nationalId; }

    public String getNationalName() { return nationalName; }
    public void setNationalName(String nationalName) { this.nationalName = nationalName; }
}
