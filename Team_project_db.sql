INSERT INTO team_project.supplier (`id`, `supplier_name`) VALUES
	(1, 'IDT_Corporation'),
    (2, 'VF_Corporation');

INSERT INTO team_project.car (`id`, `supplier_id_id`,`car_name`,`car_brand`,`car_price`) VALUES
	(1, 1, 'Hyundai Venue', 'Hyundai', '20,245$'),
    (2, 1, 'Kia Forte', 'Kia', '20115$'),
    (3, 2, 'Subaru Impreza', 'Subaru', '19,790$'),
    (4, 2, 'Kia Rio', 'Kia', '17,275$'),
    (5, 1, 'Nissan Versa', 'Nissan', '16,205$'),
    (6, 2, 'Mitsubishi Mirage', 'Mitsubishi ', '16,125$'),
    (7, 2, 'Chevrolet Spark', 'Chevrolet', '14,595$'),
    (8, 1, 'Nissan Sentra', 'Nissan', '20,635$'),
    (9, 1, 'Nissan Altima 2.5 SV', 'Nissan', '28,125$'),
    (10, 2, 'Kia Soul', 'Kia', '20,505$');

INSERT INTO team_project.customer (`id`, `customer_name`,`customer_mail`,`customer_phone`,`customer_address`) VALUES
    (1, 'Johnette Derryberry','johnette100@gmail.com','098343275','70AnThuong20'),
    (2, 'Marcelle Griego','maryyy@gmail.com','098343985','101TranThiLy'),
    (3, 'Cinthia Lasala','lazadasasa@gmail.com','0372386782','101TranThiLy'),
    (4, 'Francis Mckim','francisMC@gmail.com','0985772312','186DoBa'),
    (5, 'Louann Holzworth','holzworthtnsa@gmail.com','0336331633','182NguyenCongTru');
    
INSERT INTO team_project.order (`id`, `customer_id_id`, `car_id_id`,`discount`) VALUES
    (1, 1, 10, '5%'),
    (2, 2, 5, '10%'),
    (3, 3, 4, '10%'),
    (4, 4, 1, '3%'),
    (5, 5, 7, '5%');
