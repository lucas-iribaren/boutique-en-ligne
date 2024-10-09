CREATE TABLE Adresse (
    id INT AUTO_INCREMENT PRIMARY KEY,
    adresse VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL ,
    adresse_complement VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    code_postal VARCHAR(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    ville VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    pays VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    id_utilisateur INT NOT NULL
) ENGINE = InnoDB;

CREATE TABLE Utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    nom VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    email VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_adresse INT,
    id_role BOOLEAN NOT NULL
) ENGINE = InnoDB;

CREATE TABLE Commande (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    date_commande TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_utilisateur INT NOT NULL
) ENGINE = InnoDB;

CREATE TABLE Commande_Produit (
    id_produit INT NOT NULL,
    id_commande INT NOT NULL,
    PRIMARY KEY (id_produit, id_commande)
) ENGINE = InnoDB;

CREATE TABLE Role (
    id BOOLEAN PRIMARY KEY,
    nom VARCHAR(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL
) ENGINE = InnoDB;

CREATE TABLE Categorie_SousCategorie (
    id_categorie INT NOT NULL,
    id_sousCategorie INT NOT NULL,
    PRIMARY KEY (id_categorie, id_sousCategorie)
) ENGINE = InnoDB;

CREATE TABLE SousCategorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    description TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

CREATE TABLE Produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    description TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
    prix DECIMAL(10,2) NOT NULL,
    quantite INT NOT NULL,
    phare BOOLEAN NOT NULL,
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_sousCategorie INT NOT NULL,
    id_categorie INT NOT NULL
) ENGINE = InnoDB;

CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
    description TEXT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;


ALTER TABLE Adresse
ADD CONSTRAINT fk_adresse_utilisateur
FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id);

ALTER TABLE Utilisateur
ADD CONSTRAINT fk_utilisateur_adresse
FOREIGN KEY (id_adresse) REFERENCES Adresse(id),
ADD CONSTRAINT fk_utilisateur_role
FOREIGN KEY (id_role) REFERENCES Role(id);

ALTER TABLE Commande
ADD CONSTRAINT fk_commande_utilisateur
FOREIGN KEY (id_utilisateur) REFERENCES Utilisateur(id);

ALTER TABLE Commande_Produit
ADD CONSTRAINT fk_commande_produit_produit
FOREIGN KEY (id_produit) REFERENCES Produit(id),
ADD CONSTRAINT fk_commande_produit_commande
FOREIGN KEY (id_commande) REFERENCES Commande(id);

ALTER TABLE Categorie_SousCategorie
ADD CONSTRAINT fk_categorie_sousCategorie_categorie
FOREIGN KEY (id_categorie) REFERENCES Categorie(id),
ADD CONSTRAINT fk_categorie_sousCategorie_sousCategorie
FOREIGN KEY (id_sousCategorie) REFERENCES SousCategorie(id);

ALTER TABLE Produit
ADD CONSTRAINT fk_produit_sousCategorie
FOREIGN KEY (id_sousCategorie) REFERENCES SousCategorie(id),
ADD CONSTRAINT fk_produit_categorie
FOREIGN KEY (id_categorie) REFERENCES Categorie(id);
