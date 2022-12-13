
CREATE TABLE users (
  id int primary key AUTO_INCREMENT, 
  full_name varchar(200),
  email varchar(100),
  password varchar(100),
  phone_number varchar(100),
  address varchar(100),
  gender varchar(100),
  avata varchar(100),
  about_content text,
  contact_facebook varchar(100),
  forget_token varchar(100),
  group_id int,
  status int,
  last_activity datetime,
  created_at datetime,
  updated_at datetime
);

CREATE TABLE groups (
  id int primary key AUTO_INCREMENT,
  name varchar(200),
  user_id int,
  permission text,
  create_at datetime,
  update_at datetime
 );

CREATE TABLE contacts (
  id int primary key AUTO_INCREMENT, 
  email varchar(100),
  subject varchar(100),
  phone_number varchar(100),
  message text,
  note text,
  status int,
  created_at datetime,
  updated_at datetime
);


CREATE TABLE services (
  id int primary key AUTO_INCREMENT, 
  name varchar(200),
  slug varchar(100),
  icon varchar(100),
  description text,
  content text,
  user_id int,
  created_at datetime,
  updated_at datetime
);

CREATE TABLE beach_categories (
  id int primary key AUTO_INCREMENT,
  name varchar(200),
  user_id int,
  created_at datetime,
  updated_at datetime
);

CREATE TABLE beach (
  id int primary key AUTO_INCREMENT, 
  name varchar(200),
  slug varchar(100),
  thumbnail varchar(300),
  description text,
  video varchar(400),
  content text,
  user_id int,
  beach_categories_id int,
  created_at datetime,
  updated_at datetime
);

CREATE TABLE beach_image (
  id int primary key AUTO_INCREMENT, 
  beach_id int,
  image_path varchar(300),
  created_at datetime,
  updated_at datetime
);


CREATE TABLE blog_categories (
    id int primary key AUTO_INCREMENT,
    name varchar(100),
    slug varchar(100),
    user_id int,
    created_at datetime,
    updated_at datetime
  );

CREATE TABLE blog (
  id int primary key AUTO_INCREMENT,
  title varchar(100),
  slug varchar(100),
  user_id int,
  category_id int,
  content text,
  view_count int, 
  thumbnail varchar(100),
  description text,
  created_at datetime,
  updated_at datetime
);



CREATE TABLE subscribe (
  id int primary key AUTO_INCREMENT,
  fullname varchar(200),
  email varchar(100),
  status int,
  created_at datetime,
  updated_at datetime
);

CREATE TABLE comments (
  id int primary key AUTO_INCREMENT,
  comment_name varchar(200),
  email varchar(100),
  website varchar(200),
  content text,
  parent_id int, 
  blog_id int,
  user_id int,
  status int,
  created_at datetime,
  updated_at datetime
);


CREATE TABLE login_token (
  id int primary key AUTO_INCREMENT,
  user_id int,
  token varchar(200),
  created_at datetime
);

CREATE TABLE pages (
  id int primary key AUTO_INCREMENT,
  title varchar(100),
  slug varchar(100),
  content text,
  user_id int,
  created_at datetime
);

CREATE TABLE options (
  id int primary key AUTO_INCREMENT,
  otp_key varchar(100),
  value text,
  name varchar(100),
  created_at datetime
);


ALTER TABLE groups
ADD CONSTRAINT FK_groups_user
FOREIGN KEY (user_id) REFERENCES users(id);


ALTER TABLE services
ADD CONSTRAINT FK_services_users
FOREIGN KEY (user_id) REFERENCES users(id);


ALTER TABLE beach_categories
ADD CONSTRAINT FK_beach_category_user
FOREIGN KEY (user_id) REFERENCES users(id);


ALTER TABLE beach
ADD CONSTRAINT FK_beach_category
FOREIGN KEY (beach_categories_id) REFERENCES beach_categories(id);


ALTER TABLE blog_categories
ADD CONSTRAINT FK_blog_categories_user
FOREIGN KEY (user_id) REFERENCES users(id);
  
ALTER TABLE beach
ADD CONSTRAINT FK_beach_user
FOREIGN KEY (user_id) REFERENCES users(id);

 
ALTER TABLE beach_image
ADD CONSTRAINT FK_beach_user_image
FOREIGN KEY (beach_id) REFERENCES beach(id);

ALTER TABLE blog
ADD CONSTRAINT FK_blog_categories_catego
FOREIGN KEY (category_id) REFERENCES blog_categories(id);

ALTER TABLE blog
ADD CONSTRAINT Fore_blog_categories_user
FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE comments
ADD CONSTRAINT FK_comment_cate_id
FOREIGN KEY (blog_id) REFERENCES blog(id);

ALTER TABLE comments
ADD CONSTRAINT FK_comment__user
FOREIGN KEY (user_id) REFERENCES users(id);


ALTER TABLE login_token
ADD CONSTRAINT FK_blog_categories_user
FOREIGN KEY (user_id) REFERENCES users(id);

ALTER TABLE pages
ADD CONSTRAINT FK_pages_user
FOREIGN KEY (user_id) REFERENCES users(id);
