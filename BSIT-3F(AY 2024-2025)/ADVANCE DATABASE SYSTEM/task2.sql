create database task2;
use task2;

-- Create table Inventory
CREATE TABLE Inventory(
    ItemID INT AUTO_INCREMENT PRIMARY KEY,
    ItemName varchar(100),
    Quantity int,
    Price decimal(10,2)
);
select * from Inventory;

-- Create stored procedure
DELIMITER //
create procedure ManageInventory(
	IN action varchar(10),
    IN itemID int,
    IN itemName varchar(100),
    IN quantity int,
    IN price decimal(10,2)
)
BEGIN
	IF action="add" then
		INSERT into Inventory(ItemName,Quantity,Price) Values (itemName, quantity, price);
	ELSEIF action="update" then
		UPDATE Inventory SET ItemName= itemName, Quantity = quantity, Price = price
        WHERE ItemName = itemName;
	ELSEIF action="retrieve" THEN
		SELECT * FROM Inventory WHERE  ItemID = itemID;
	ELSE
		SELECT "Invalid Action";
	END IF;
END//
DELIMITER ;

-- Insert a value using the stored procedure
CALL ManageInventory("add", 1, "Lapis", 5, 50.00); 
CALL ManageInventory("update", null, "Ballpen", 2, 30.00); 
SELECT * FROM Inventory;
