CREATE TABLE mensajeria (
    ID_Mensaje INT PRIMARY KEY,
    ID_Emisor INT NOT NULL, -- ID del estudiante o profesor que envía el mensaje
    ID_Receptor INT NOT NULL, -- ID del estudiante o profesor que recibe el mensaje
    asunto VARCHAR(255),
    Mensaje VARCHAR(MAX) NOT NULL,
    FechaEnvio DATETIME NOT NULL,
    Leido BIT NOT NULL DEFAULT 0 -- Indica si el mensaje ha sido leído o no
);