Projet3 

billets comentaire  signaler 






------------------------
création de billets 
lecture de billets
mise a jours de billets
suppresion de billets



----------------------------
admin 

login passeport 

modération des billets




CREATE TABLE tracks (
  traid     INTEGER, 
  title   TEXT, 
  artist INTEGER,
  FOREIGN KEY(artist) REFERENCES artists(id)
);