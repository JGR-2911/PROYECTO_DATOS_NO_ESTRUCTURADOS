
use BikeStore;
select * from production.categories;
select * from sales.orders

ALTER AUTHORIZATION ON DATABASE::"BikeStore" 
TO "sa"EXECUTE AS USER = N'dbo' REVERT