# Lab-2-Building-a-Grocery-Store-Management-System-with-PHP
# Name:Hongyu
Summary:

# Code Explanation:

Using PHP to handle session data:

1. `session_start();` is used to store and access data across different pages.
2. `$_SESSION['grocery_items']` stores the product information to prevent data loss after page refresh.

# Product Data Storage:

1. An associative array is used to store product information (name, category, price, expiration date).
2. A few products are initialized by default.

# Displaying Products:

1. An HTML table is used to display the product inventory.
2. The `check_expiry($expiry_date)` function checks if the product is expired and marks expired products in red.

# Adding New Products:

- A form with a POST request is used to add new products to the inventory.

# Styling Optimization:

- Expired products are highlighted with a red warning.

  # enhancements
  
1. Data Storage in data.json:** Unlike typical session or database solutions, the data is stored in a `data.json` file.
2. Unique IDs for Products:** Each product is assigned a unique ID using `uniqid()`, making it easier to extend the functionality for deletion.
3. UI Beautification:** Expired products are highlighted to enhance the interactive experience.
4. JSON Read/Write:** Simulates real data storage methods, aligning with modern development trends.

# challenges faced:
1. Syntax Errors: Check for missing semicolons, parentheses.
2. Logical Errors: Carefully review the conditions, loops, and data handling in the code to ensure they meet the requirements.
3. Debugging Issues: Use debugging tools or functions like echo, var_dump, etc., to output variable values and help identify errors.
4. Environment Issues: If using databases or external tools, ensure the configuration is correct and the server is running properly.
