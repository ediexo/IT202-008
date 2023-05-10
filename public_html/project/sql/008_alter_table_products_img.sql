ALTER TABLE Products ADD COLUMN img varchar(150) 
not null unique default ('https://upload.wikimedia.org/wikipedia/commons/f/f7/No_Image_%282879926%29_-_The_Noun_Project.svg') 
COMMENT 'product image that defaults to a "no photo" image';