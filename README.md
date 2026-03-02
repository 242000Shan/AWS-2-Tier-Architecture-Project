# ☁ AWS Two-Tier Architecture Deployment

## 📌 Project Overview

This project demonstrates the deployment of a secure and scalable Two-Tier Architecture on Amazon Web Services (AWS).

The architecture separates the application layer and database layer into different network tiers using Amazon VPC, ensuring improved security, isolation, and controlled access.

This setup follows cloud security best practices and high-availability design principles.

---

## 🏗 Architecture Design

Client (Internet)
        ↓
Public Subnet (Web Tier - EC2)
        ↓
Private Subnet (Database Tier - EC2)

---

## 🛠 Technologies Used

- AWS EC2
- Amazon VPC
- Public & Private Subnets
- Internet Gateway
- Route Tables
- Security Groups
- SSH (Linux)
- Apache (Web Server)
- MySQL (Database)

---

## 🧱 Architecture Components

### 1️⃣ Virtual Private Cloud (VPC)

- Created custom VPC with CIDR block (e.g., 10.0.0.0/16)
- Enabled DNS support and DNS hostnames

### 2️⃣ Subnets

- Public Subnet (10.0.0.0/23)
  - Hosts Web Server EC2
  - Connected to Internet Gateway

- Private Subnet (10.0.2.0/23)
  - Hosts Database EC2
  - No direct internet access

### 3️⃣ Internet Gateway

- Attached to VPC
- Allows public subnet instances to access internet

### 4️⃣ Route Tables

- Public Route Table → Route to Internet Gateway
- Private Route Table → Internal routing only

### 5️⃣ EC2 Instances

- Web Server (Public Subnet)
  - Installed Apache
  - Serves frontend application

- Database Server (Private Subnet)
  - Installed MySQL
  - Accessible only from Web Server

### 6️⃣ Security Groups Configuration

Web Server Security Group:
- Allow HTTP (Port 80) from 0.0.0.0/0
- Allow SSH (Port 22) from My IP
- Allow MySQL outbound to DB

Database Security Group:
- Allow MySQL (Port 3306) ONLY from Web Server Security Group
- No public access

---

## 🔐 Security Implementation

- Database server isolated in private subnet
- Controlled traffic using Security Groups
- No direct public access to database
- Restricted SSH access
- Principle of Least Privilege applied

---

## 🚀 Deployment Steps

1. Created VPC
2. Created Public and Private Subnets
3. Attached Internet Gateway
4. Configured Route Tables
5. Launched Web Server EC2 in Public Subnet
6. Launched Database EC2 in Private Subnet
7. Configured Security Groups
8. Installed Web & Database services
9. Tested connectivity between tiers

---

## 🧪 Testing & Validation

- Verified public access to web server
- Verified database is NOT publicly accessible
- Confirmed web server connects to database internally
- Tested security group restrictions

---

## 🎯 Key Learning Outcomes

- Hands-on experience with AWS networking
- Understanding VPC architecture
- Subnet segmentation
- Security group configuration
- Cloud infrastructure security best practices
- Designing secure production-ready architecture

---

## 🔒 Security Note

This project was implemented in a controlled AWS environment for educational purposes.

---

## 👩‍💻 Author

Shanmuga Priya  
Cloud & DevOps Enthusiast
