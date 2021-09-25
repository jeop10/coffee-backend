//// -- LEVEL 1
//// -- Tables and References

// Creating tables
Table user {
  id int [pk, increment] // auto-increment
  name varchar
  last_name varchar
  email varchar
  password varchar
}

// Creating references
// You can also define relaionship separately
// > many-to-one; < one-to-many; - one-to-one


//----------------------------------------------//

Table cart {
  id int [pk] // primary key
  status char(8)
  confirmation_number varchar
  total_taxes decimal (10,2)
  total_price decimal (10,2)
  created_at datetime [note: 'When order created'] // add column note
  updated_at dateime
}

Table cart_product {
  id int
  cart_id int
  product_id int
  quantity int
  price decimal (10,2)
}

Table cart_user {
  cart_id int
  user_id int
}

Ref: product.id - cart_product.product_id
Ref: cart.id < cart_product.cart_id
Ref: cart.id - cart_user.cart_id
Ref: user.id < cart_user.user_id

//----------------------------------------------//

Table product {
  id int [pk]
  name varchar
  description text
  size char(8)
  price decimal(10,2)
  stock int
}

Table media {
  id int [pk]
  product_id int
  url varchar
  description text
}

Ref: product.id - media.product_id

//----------------------------------------------//

Table translation {
  field string
  lang string
  value string
}
