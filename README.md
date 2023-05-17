## WANDIE ADMIN PANEL -  CMS V2 
Wandie Admin Panel is a master admin panel that gives you a fully fledged back-end for your web based applications. It allows you to quickly spin up your web application , ecommerce web application, website , bloging platform, management systems and more. You only have to worry about the front-end and leave the backend to wandie admin.


## MODULES IN THE APPLICATION 
## ------------------------------------
## ------------------------------------

## ECOMMERCE MODULE FEATURES
- Add product brands
- Manage product brands
- Add product Colors
- Manage product Colors
- Add product category
- Manage product categories
- Add product
- Manage Products
- Add products with multiple images with relationship
- Show categories of all products
- Display products by brands
- Display products by categories
- Display products by new arrivals
- Display products by price sorting, low to high and high to low




## ------------------------------------
## ------------------------------------

## COMMENTS SYSTEM FOR BLOGS INTEGRATION
- Disqus comments : https://disqus.com/

## Flutterwave Integration 
- Docs : https://laravelrave.netlify.app



## API 
## Admin/Server_Side Api Controller
How to add an admin api controller 
- php artisan make:controller Api/v1/Admin/AdminApiPostController -r

## ADMIN ENDPOINTS
### Feedback Endpoints
- All Feedbacks    : http://127.0.0.1:8000/api/v1/feedbacks
- Feedback Details : http://127.0.0.1:8000/api/v1/feedbacks/2
- Delete Feedback  : http://127.0.0.1:8000/api/v1/feedbacks/2

## Customer/Client Api Controller
How to add an customer/client api controller 
- php artisan make:controller Api/v1/Customer/CustomerApiPostController -r


## CODE MANUAL DOCUMENTATION

## Validation requests
php artisan make:request ProductColorFormRequest

## Making single validation
php artisan migrate:refresh --path=/database/migrations/fileName.php



