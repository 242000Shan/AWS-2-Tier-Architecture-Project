# ☁ AWS Two-Tier Architecture Deployment 

## 📌 Project Overview

This project demonstrates the deployment of a secure **Two-Tier Architecture** using Amazon Web Services.

The architecture separates:

* **Web Tier (Application Layer)** – Hosted on Amazon EC2
* **Database Tier (Data Layer)** – Hosted on Amazon RDS

The database is deployed in a private subnet to ensure secure communication and restricted access.

---

## 🏗 Architecture Design

```
Internet User
      │
      ▼
EC2 Instance (Web Server - Public Subnet)
      │
      ▼
Amazon RDS MySQL (Private Subnet)
```

## 🛠 Technologies Used

* Amazon EC2
* Amazon RDS (MySQL Engine)
* Amazon VPC
* Public & Private Subnets
* Internet Gateway
* Route Tables
* Security Groups
* Apache Web Server
* PHP
* Linux (Amazon Linux 2)

---

## 🧱 Architecture Components

### 1️⃣ Virtual Private Cloud (VPC)

* Created custom VPC (CIDR: 10.0.0.0/16)
* Enabled DNS support & hostnames
* Provided isolated cloud networking environment

---

### 2️⃣ Subnets

**Public Subnet**

* Hosts EC2 Web Server
* Connected to Internet Gateway
* Allows internet access

**Private Subnet**

* Hosts Amazon RDS
* No direct internet access
* Accessible only from Web Server

---

### 3️⃣ Internet Gateway

* Attached to VPC
* Enables internet access for public subnet resources

---

### 4️⃣ Route Tables

**Public Route Table**

* Route: 0.0.0.0/0 → Internet Gateway

**Private Route Table**

* Internal VPC routing only
* No internet route

---

### 5️⃣ Web Tier (EC2)

* Launched EC2 in Public Subnet
* Installed:

  * Apache
  * PHP
* Hosted simple web application
* Connected securely to RDS

---

### 6️⃣ Database Tier (RDS)

* Deployed Amazon RDS (MySQL)
* Placed in Private Subnet
* Public access disabled
* Only accessible via Web Server Security Group

---

## 🔐 Security Group Configuration

### Web Server Security Group

* Allow HTTP (80) from 0.0.0.0/0
* Allow SSH (22) from My IP only
* Allow outbound MySQL traffic

### Database Security Group

* Allow MySQL (3306) ONLY from Web Server Security Group
* No public inbound access

---

## 🚀 Deployment Steps

1. Created custom VPC
2. Created Public and Private Subnets
3. Attached Internet Gateway
4. Configured Route Tables
5. Launched EC2 in Public Subnet
6. Created Amazon RDS in Private Subnet
7. Configured Security Groups
8. Installed Apache & configured application
9. Verified EC2 to RDS connectivity

---

## 🧪 Testing & Validation

* Verified public access to web application
* Confirmed RDS is not publicly accessible
* Tested database connectivity from EC2
* Validated Security Group restrictions

---

## 🎯 Key Learning Outcomes

* AWS VPC Networking concepts
* Public vs Private Subnet design
* Secure EC2–RDS communication
* Security Group configuration
* Cloud infrastructure deployment
* Basic scalability concepts

---

## 🔒 Security Note

This project was implemented in a controlled AWS environment for educational and practice purposes.

---

## 👩‍💻 Author

Shanmuga Priya.S
(Cloud & DevOps Learner)
