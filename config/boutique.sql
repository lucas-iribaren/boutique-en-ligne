-- Table Adresse
CREATE TABLE Adresse (
    id INT AUTO_INCREMENT PRIMARY KEY,
    adresse VARCHAR(255) NOT NULL,
    adresse_complement VARCHAR(255),
    code_postal VARCHAR(10) NOT NULL,
    ville VARCHAR(100) NOT NULL,
    pays VARCHAR(100) NOT NULL,
    id_utilisateur INT NOT NULL,
    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

-- Table Utilisateur
CREATE TABLE Utilisateur (
    id INT AUTO_INCREMENT PRIMARY KEY,
    prenom VARCHAR(100) NOT NULL,
    nom VARCHAR(100) NOT NULL,
    email VARCHAR(255) UNIQUE NOT NULL,
    mot_de_passe VARCHAR(255) NOT NULL,
    date_inscription TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_adresse INT,
    id_role BOOLEAN NOT NULL,
    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

-- Table Commande
CREATE TABLE Commande (
    id INT AUTO_INCREMENT PRIMARY KEY,
    status VARCHAR(50) NOT NULL,
    date_commande TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_utilisateur INT NOT NULL,
    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

-- Table Commande_Produit (relation many-to-many entre Commande et Produit)
CREATE TABLE Commande_Produit (
    id_produit INT NOT NULL,
    id_commande INT NOT NULL,
    PRIMARY KEY (id_produit, id_commande),
    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

-- Table Role
CREATE TABLE Role (
    id BOOLEAN PRIMARY KEY,
    nom VARCHAR(50) NOT NULL,
    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

-- Table Catégorie_Sous-catégorie (relation many-to-many entre Catégorie et Sous-catégorie)
CREATE TABLE Categorie_Sous_categorie (
    id_categorie INT NOT NULL,
    id_sous_categorie INT NOT NULL,
    PRIMARY KEY (id_categorie, id_sous_categorie),
    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

-- Table Sous-catégorie
CREATE TABLE Sous_categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

-- Table Produit
CREATE TABLE Produit (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(255) NOT NULL,
    description TEXT,
    prix DECIMAL(10,2) NOT NULL,
    quantite INT NOT NULL,
    phare BOOLEAN NOT NULL,
    date_ajout TIMESTAMP DEFAULT CURRENT_TIMESTAMP NOT NULL,
    id_sous_categorie INT NOT NULL,
    id_categorie INT NOT NULL,
    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

-- Table Catégorie
CREATE TABLE Categorie (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(100) NOT NULL,
    description TEXT,
    CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE = InnoDB;

-- Ajout des contraintes de clés étrangères avec ALTER TABLE

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

ALTER TABLE Categorie_Sous_categorie
ADD CONSTRAINT fk_categorie_sous_categorie_categorie
FOREIGN KEY (id_categorie) REFERENCES Categorie(id),
ADD CONSTRAINT fk_categorie_sous_categorie_sous_categorie
FOREIGN KEY (id_sous_categorie) REFERENCES Sous_categorie(id);

ALTER TABLE Produit
ADD CONSTRAINT fk_produit_sous_categorie
FOREIGN KEY (id_sous_categorie) REFERENCES Sous_categorie(id),
ADD CONSTRAINT fk_produit_categorie
FOREIGN KEY (id_categorie) REFERENCES Categorie(id);
