set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "CONSULTARUSUARIO" (
    pUSUARIO_ID IN NUMBER,
    pCursor OUT SYS_REFCURSOR
) AS
BEGIN
    OPEN pCursor FOR
        SELECT  USUARIO_ID,
                EMAIL,
                ESTADO,
                CASE WHEN ESTADO = 1 THEN 'Activo' ELSE 'Inactivo' END AS DescEstado,
                U.TIPO_USUARIO,
                T.ROL,
                NOMBRE
        FROM USUARIO U
        INNER JOIN TIPO_USUARIO T ON U.TIPO_USUARIO = T.ID
        WHERE USUARIO_ID = pUSUARIO_ID;
END;

set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "CONSULTAR_USUARIOS" 
(
    P_CURSOR OUT SYS_REFCURSOR
)
AS
BEGIN
    OPEN P_CURSOR FOR
        SELECT 
            USUARIO_ID, 
            NOMBRE, 
            EMAIL, 
            ESTADO, 
            TIPO_USUARIO 
        FROM 
            USUARIO
        WHERE 
            ESTADO = '1'; -- Agrega un filtro por estado activo

END;

set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "INICIAR_SESION" (
    pe_email IN VARCHAR2,
    pe_contrasena IN VARCHAR2,
    p_usuario_id OUT NUMBER,
    p_nombre OUT VARCHAR2,
    p_estado OUT NUMBER,
    p_tipo_usuario OUT NUMBER,
    p_resultado OUT NUMBER,
    s_email OUT VARCHAR2
) AS
BEGIN
    SELECT USUARIO_ID, NOMBRE, ESTADO, TIPO_USUARIO, EMAIL INTO p_usuario_id, p_nombre, p_estado, p_tipo_usuario, s_email
    FROM Usuario
    WHERE email = pe_email AND contrasena = pe_contrasena;

    IF SQL%FOUND AND p_estado = 1 THEN
        p_resultado := 1; -- Inicio de sesión exitoso
    ELSE
        p_resultado := 0; -- Inicio de sesión fallido
    END IF;
END;

set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "INSERTAR_USUARIO" 
(
  P_EMAIL IN VARCHAR2 
, P_CONTRASENA IN VARCHAR2 
, P_NOMBRE IN VARCHAR2 
, P_TIPO_USUARIO IN NUMBER 
) AS 
BEGIN
  INSERT INTO USUARIO (EMAIL,CONTRASENA,NOMBRE,TIPO_USUARIO,ESTADO) VALUES (P_EMAIL, P_CONTRASENA, P_NOMBRE, P_TIPO_USUARIO, 1);
END INSERTAR_USUARIO;

set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "ELIMINAR_USUARIO" (pUSUARIO_ID IN NUMBER)
IS
BEGIN
   
    DELETE FROM USUARIO WHERE USUARIO_ID = pUSUARIO_ID;
END;

set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "ACTUALIZAR_USUARIO" (
  pUSUARIO_ID IN usuario.USUARIO_ID%TYPE,
  pNombre IN usuario.NOMBRE%TYPE,
  pPerfil IN usuario.TIPO_USUARIO%TYPE,
  pContrasena IN usuario.Contrasena%TYPE DEFAULT NULL
) AS
  v_contrasena usuario.Contrasena%TYPE;
BEGIN
  IF pContrasena IS NULL THEN
    SELECT Contrasena INTO v_contrasena
    FROM usuario
    WHERE USUARIO_ID = pUSUARIO_ID;
  ELSE
    v_contrasena := pContrasena;
  END IF;

  UPDATE usuario
  SET Contrasena = v_contrasena,
      Nombre = pNombre,
      TIPO_USUARIO = pPerfil
  WHERE USUARIO_ID = pUSUARIO_ID;
END;

SET DEFINE OFF;
Insert into TIPO_USUARIO (ID,ROL) values ('1','ADMIN');
Insert into TIPO_USUARIO (ID,ROL) values ('2','CLIENTE');

SET DEFINE OFF;
Insert into USUARIO (USUARIO_ID,EMAIL,CONTRASENA,NOMBRE,TIPO_USUARIO,ESTADO) values ('1','valeriaalif@gmail.com','root','VALERIA SOFIA ALI','1','1');
Insert into USUARIO (USUARIO_ID,EMAIL,CONTRASENA,NOMBRE,TIPO_USUARIO,ESTADO) values ('12','prueba3@gmail.com','123','Prueba3','2','1');
Insert into USUARIO (USUARIO_ID,EMAIL,CONTRASENA,NOMBRE,TIPO_USUARIO,ESTADO) values ('23','ejemplo@gmail.com','1234','Prueba','1','1');
Insert into USUARIO (USUARIO_ID,EMAIL,CONTRASENA,NOMBRE,TIPO_USUARIO,ESTADO) values ('4','eduardo@gmail.com','123','Eduardo Perez Castro','2','1');
REM INSERTING into VISTA_TODOS_USUARIOS