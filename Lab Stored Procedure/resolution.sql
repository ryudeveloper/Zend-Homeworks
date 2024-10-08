DELIMITER //

CREATE PROCEDURE AddCustomer(
    IN customer_name VARCHAR(100),
    IN customer_email VARCHAR(100),
    IN customer_address VARCHAR(255)
)
BEGIN
    INSERT INTO customers (name, email, address) 
    VALUES (customer_name, customer_email, customer_address);
END //

DELIMITER ;