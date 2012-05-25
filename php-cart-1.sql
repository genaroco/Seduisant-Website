CREATE TABLE books (
  id int(6) unsigned NOT NULL auto_increment,
  title varchar(100) NOT NULL default '',
  author varchar(100) NOT NULL default '',
  price decimal(3,2) NOT NULL default '0.00',
  PRIMARY KEY  (id)
) TYPE=MyISAM;

INSERT INTO books VALUES (1, 'Where God Went Wrong', 'Oolon Colluphid', '24.99');
INSERT INTO books VALUES (2, 'Some More of God\'s Greatest Mistakes', 'Oolon Colluphid', '17.99');
INSERT INTO books VALUES (3, 'Who Is This God Person Anyway?', 'Oolon Colluphid', '14.99');