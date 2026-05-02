# Home Service Management System

A professional, web-based platform designed to connect homeowners with verified service providers. This project streamlines the process of finding, booking, and managing essential home services like plumbing, electrical work, and cleaning.

---

## Project Description
The **Home Service Management System (HSMS)** is a full-stack solution built to solve the difficulty of finding reliable home maintenance. It provides a secure environment where customers can browse service categories, view transparent pricing, and manage their appointments through a private dashboard. The application is built with a focus on ease of use, data security, and efficient database management.

---

## Key Features
*   **Secure Authentication:** User signup and login system utilizing **PHP Sessions** and **Password Hashing** (Bcrypt) for maximum security.
*   **Dynamic Service Catalog:** A real-time homepage that pulls available services directly from a MySQL database.
*   **User Dashboard:** A dedicated space for customers to view their booking history and track the status of their requests (Pending/Confirmed/Completed).
*   **Account Management:** Users can view their personal profiles, account roles, and membership details.
*   **Responsive UI:** A modern design styled with custom CSS, including a hero section (with space for a custom background) and interactive service cards.
*   **Session Security:** Integrated logout functionality that clears all session data to protect user privacy.

---

## Keynotes & Technical Highlights
*   **Relational Database Integrity:** Implements **Primary and Foreign Keys** to maintain robust relationships between users, services, and bookings.
*   **Clean Code Architecture:** Strictly separates logic (**PHP**), structure (**HTML**), and styling (**CSS**) for high maintainability.
*   **Local Development Ready:** Fully optimized for **XAMPP** environments (Apache & MySQL).
*   **Safe Data Handling:** Uses `htmlspecialchars()` to prevent XSS attacks and prepared logic to maintain data consistency.

---

## Tools & Technologies Used

### **Frontend**
*   **HTML5:** Structured semantic markup.
*   **CSS3:** Custom styling with variables for a consistent UI/UX.
*   **JavaScript:** Client-side interaction and alert handling.

### **Backend**
*   **PHP:** Server-side processing and session management.
*   **MySQL:** Relational database management system.

### **Development Tools**
*   **XAMPP:** Local server environment.
*   **VS Code:** Integrated development environment.
*   **GitHub:** Version control and collaboration.

---

## Installation & Setup

1.  **Clone the Repository:**
    ```bash
    git clone [https://github.com/yourusername/homeservice.git](https://github.com/yourusername/homeservice.git)
