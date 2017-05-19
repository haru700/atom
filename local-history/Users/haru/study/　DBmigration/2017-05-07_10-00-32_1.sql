# Userテーブル
# ---!Ups
CREATE TABLE User(
  id digit(20) NOT NULL AUTO_INCREMENT,
  email varchar(255) NOT NULL,
  password varchar(255) NOT NULL,
  name varchar(255) NOT NULL,
  created_at date NULL,
  updated_at date NULL,
  PRIMARY KEY(id)
);

# --- !Downs;

DROP TABLE User;
