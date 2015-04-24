INSERT INTO city (city) VALUES ('Santiago de Compostela');
INSERT INTO city (city) VALUES ('Vigo');
INSERT INTO city (city) VALUES ('A Coruña');

SELECT * FROM city;

INSERT INTO gender (gender) VALUE ('m');
INSERT INTO gender (gender) VALUE ('h');
INSERT INTO gender (gender) VALUE ('o');

INSERT INTO transport (transport) VALUE ('bici'), ('moto'), ('coche');

INSERT INTO language (language) VALUE ('php'),('c++'),('python');

INSERT INTO user SET iduser='id1',
					 name = 'Agustin',
                     email='agustincl@gmail.com',
					 password='1234',
                     description='desc',
                     photo='imag1.png',
                     gender_idgender=1,
                     city_idcity=4;
                     
                     