# GitHub Issues App

A Laravel-based application for managing and displaying GitHub issues.

## **Prerequisites**

Make sure you have the following installed on your system:

- **PHP** (version 8.1 or higher)
- **Composer** (latest version)
- **Node.js** (version 18 or higher) and **npm**

---

## **Setup Instructions**

Follow these steps to set up and run the application on your local machine:

### **1. Clone the Repository**

```bash
git clone https://github.com/your-username/github-issues-app.git
cd github-issues-app
```

### **2. Install PHP extensions**
#### Ensure the following PHP extensions are installed:

###### php8.2-cli
###### php8.2-xml
###### php8.2-dom
###### php8.2-intl
###### php8.2-mbstring
###### php8.2-curl
###### php8.2-opcache
###### php8.2-zip

## To install these extensions, run the following command:

```bash
sudo apt-get install php8.2-cli php8.2-xml php8.2-dom php8.2-intl php8.2-mbstring php8.2-curl php8.2-opcache php8.2-zip
```

### **3. Run the setup-env command**
#### This will write .env.local in the root of your app, then paste your github personal token here

```bash
npm run setup-env
```

### **4. Run the setup command**
#### This will run composer, configure env, generate app key and build frontend assets

```bash
npm run setup
```

### **5. Start the Development Server**
#### Access the application at: http://127.0.0.1:8000

```bash
php artisan serve
```
## *** Expected UI *** 

### *** Github Assigned Issue List ***
<img width="975" alt="Screenshot 2025-01-26 at 12 25 42 PM" src="https://github.com/user-attachments/assets/6a4fd25a-4d9d-4d4c-b7f6-e0157f96fb86" />

### *** Assigned Issue Details ***
<img width="948" alt="Screenshot 2025-01-26 at 12 25 51 PM" src="https://github.com/user-attachments/assets/73564ed3-3d61-42ee-875b-e5fdcea754ad" />


