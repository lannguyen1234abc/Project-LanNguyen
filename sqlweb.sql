use banhangcake;
insert into slides (link,image)
values ('banh-ngot-phap.jpg','img1'),
		('banh-pancake-kieu-my.jpg','img1'),
        ('banh-flan-socola.jpg','img1');
        
        delete from slides where id=3;

insert into producttypes (name,description)
values ('Bánh ngọt', 'Các loại bánh'),
		('Bánh pizza', 'Các loại bánh'),
        ('Bánh kem', 'Các loại bánh');
        
        delete from producttypes where id=6;


insert into products (name, producttype_id, description, price, promotion_price, image, unit, new)
values ('Bánh bông lan', 1,'bánh', 20000, 18000, 'banh-bong-lan.jpg', 'hộp', 1),
		('Bánh bông lan', 1,'bánh', 20000, 18000, 'banh-bong-lan.jpg', 'hộp', 1),
        ('Bánh bông lan', 1,'bánh', 20000, 18000, 'banh-bong-lan.jpg', 'hộp', 1),
        ('Bánh bông lan', 2,'bánh', 20000, 18000, 'banh-bong-lan.jpg', 'hộp', 0),
        ('Bánh bông lan', 2,'bánh', 20000, 18000, 'banh-bong-lan.jpg', 'hộp', 1),
        ('Bánh bông lan', 3,'bánh', 20000, 18000, 'banh-bong-lan.jpg', 'hộp', 1),
        ('Bánh bông lan', 3,'bánh', 20000, 18000, 'banh-bong-lan.jpg', 'hộp', 0);