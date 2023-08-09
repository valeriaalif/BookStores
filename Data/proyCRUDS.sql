
--CRUD DE USUARIOS
create or replace NONEDITIONABLE PROCEDURE "INSERTAR_USUARIO" 
(
  P_EMAIL IN VARCHAR2 
, P_CONTRASENA IN VARCHAR2 
, P_NOMBRE IN VARCHAR2 
, P_TIPO_USUARIO IN NUMBER 
) AS 
BEGIN
  INSERT INTO USUARIO (EMAIL,CONTRASENA,NOMBRE,TIPO_USUARIO,ESTADO) VALUES (P_EMAIL, P_CONTRASENA, P_NOMBRE, P_TIPO_USUARIO, 1);
END INSERTAR_USUARIO;

create or replace NONEDITIONABLE PROCEDURE "INICIAR_SESION" (
    pe_email IN VARCHAR2,
    pe_contrasena IN VARCHAR2,
    p_nombre OUT VARCHAR2,
    p_estado OUT NUMBER,
    p_resultado OUT NUMBER,
    s_email OUT VARCHAR2
) AS
BEGIN
    SELECT NOMBRE, ESTADO, EMAIL INTO  p_nombre, p_estado, s_email
    FROM Usuario
    WHERE email = pe_email AND contrasena = pe_contrasena;

    IF SQL%FOUND AND p_estado = 1 THEN
        p_resultado := 1; -- Inicio de sesi�n exitoso
    ELSE
        p_resultado := 0; -- Inicio de sesi�n fallido
    END IF;
END;

create or replace NONEDITIONABLE PROCEDURE "CONSULTAR_USUARIOS" 
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

create or replace NONEDITIONABLE PROCEDURE "CONSULTARUSUARIO" (
    pUSUARIO_ID IN NUMBER,
    pCursor OUT SYS_REFCURSOR
) AS
BEGIN
    OPEN pCursor FOR
        SELECT  USUARIO_ID,
                EMAIL,
                ESTADO,
                CASE WHEN ESTADO = 1 THEN 'Activo' ELSE 'Inactivo' END AS DescEstado,
                TIPO_USUARIO,
                NOMBRE
        FROM USUARIO 
        WHERE USUARIO_ID = pUSUARIO_ID;
END;

create or replace NONEDITIONABLE PROCEDURE "ELIMINAR_USUARIO" (pUSUARIO_ID IN NUMBER)
IS
BEGIN

    DELETE FROM USUARIO WHERE USUARIO_ID = pUSUARIO_ID;
END;

create or replace NONEDITIONABLE PROCEDURE "ACTUALIZAR_USUARIO" (
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

--CRUD PRODUCTOS

create or replace NONEDITIONABLE PROCEDURE "INSERTAR_PRODUCTO" 
(
    pNOMBRE_PRODUCTO IN VARCHAR2,
    pPRECIO IN FLOAT ,
    pEXISTENCIAS IN NUMBER
)
AS 
BEGIN
    INSERT INTO PRODUCTO (NOMBRE_PRODUCTO,PRECIO,EXISTENCIAS) 
    VALUES (pNOMBRE_PRODUCTO, pPRECIO, pEXISTENCIAS);
END; 

create or replace NONEDITIONABLE PROCEDURE "CONSULTARPRODUCTO" (
    pTOUR_ID IN NUMBER,
    pCursor OUT SYS_REFCURSOR
) AS
BEGIN
    OPEN pCursor FOR
        SELECT  PRODUCTO_ID,
                NOMBRE_PRODUCTO,
                PRECIO,
                EXISTENCIAS
        FROM PRODUCTO;
END;

create or replace NONEDITIONABLE PROCEDURE "ELIMINAR_PRODUCTO" (pPRODUCTO_ID IN NUMBER)
IS
BEGIN

    DELETE FROM PRODUCTO WHERE PRODUCTO_ID = pPRODUCTO_ID;
END;

create or replace NONEDITIONABLE PROCEDURE "ACTUALIZARPRODUCTO" (

  pPRODUCTO_ID IN producto.PRODUCTO_ID%TYPE,
  pNOMBRE_PRODUCTO IN producto.NOMBRE_PRODUCTO%TYPE,
  pPRECIO IN producto.PRECIO%TYPE,
  pEXISTENCIAS IN producto.EXISTENCIAS%TYPE DEFAULT NULL
) AS
  
BEGIN

  UPDATE PRODUCTO
  SET 
      NOMBRE_PRODUCTO = pNOMBRE_PRODUCTO,
      PRECIO = pPRECIO,
      EXISTENCIAS = pEXISTENCIAS

  WHERE PRODUCTO_ID = pPRODUCTO_ID;

END;

--CRUD PROVEEDORES

create or replace NONEDITIONABLE PROCEDURE "CONSULTARPROVEEDOR" (
    pPROVEEDOR_ID IN NUMBER,
    pCursor OUT SYS_REFCURSOR
) AS
BEGIN
    OPEN pCursor FOR
        SELECT  PROVEEDOR_ID,
                NOMBRE_PROVEEDOR,
                EMAIL,
                TELEFONO
        FROM PROVEEDOR P
        WHERE PROVEEDOR_ID = pPROVEEDOR_ID;
END;

create or replace NONEDITIONABLE PROCEDURE "INSERTAR_PROVEEDOR" 
(
    pNOMBRE_PROVEEDOR IN VARCHAR2,
    pEMAIL IN VARCHAR2 ,
    pTELEFONO IN VARCHAR2 
) AS 
BEGIN
    INSERT INTO PROVEEDOR (NOMBRE_PROVEEDOR,EMAIL,TELEFONO) VALUES ( pNOMBRE_PROVEEDOR, pEMAIL, pTELEFONO);
END;

create or replace NONEDITIONABLE PROCEDURE "ELIMINAR_PROVEEDOR" (pPROVEEDOR_ID IN NUMBER)
IS
BEGIN

    DELETE FROM PROVEEDOR WHERE PROVEEDOR_ID = pPROVEEDOR_ID;
END;

create or replace NONEDITIONABLE PROCEDURE "ACTUALIZARPROVEEDOR" (

  pPROVEEDOR_ID IN proveedor.PROVEEDOR_ID%TYPE,
  pNOMBRE_PROVEEDOR IN proveedor.NOMBRE_PROVEEDOR%TYPE,
  pEMAIL IN proveedor.EMAIL%TYPE,
  pTELEFONO IN proveedor.TELEFONO%TYPE DEFAULT NULL
) AS
  
BEGIN

  UPDATE PROVEEDOR
  SET 
      NOMBRE_PROVEEDOR = pNOMBRE_PROVEEDOR,
      EMAIL = pEMAIL,
      TELEFONO = pTELEFONO

  WHERE PROVEEDOR_ID = pPROVEEDOR_ID;

END;

--CRUD RECURSOS

create or replace NONEDITIONABLE PROCEDURE "CONSULTARRECURSO" (
    pRECURSO_ID IN NUMBER,
    pCursor OUT SYS_REFCURSOR
) AS
BEGIN
    OPEN pCursor FOR
        SELECT  RECURSO_ID,
                TIPO_RECURSO,
                URL
        FROM RECURSO R
        WHERE RECURSO_ID = RECURSO_ID;
END;

create or replace NONEDITIONABLE PROCEDURE "INSERTAR_RECURSO" 
(
    pTIPO_RECURSO IN VARCHAR2,
    pURL IN VARCHAR2 
) AS 
BEGIN
    INSERT INTO RECURSO (TIPO_RECURSO,URL) VALUES ( pTIPO_RECURSO, pURL);
END;

create or replace NONEDITIONABLE PROCEDURE "ELIMINAR_RECURSO" (pRECURSO_ID IN NUMBER)
IS
BEGIN

    DELETE FROM RECURSO WHERE RECURSO_ID = pRECURSO_ID;
END;

create or replace NONEDITIONABLE PROCEDURE "ACTUALIZARRECURSO" (

  pRECURSO_ID IN recurso.RECURSO_ID%TYPE,
  pTIPO_RECURSO IN recurso.TIPO_RECURSO%TYPE,
  pURL IN recurso.URL%TYPE DEFAULT NULL
) AS
  
BEGIN

  UPDATE RECURSO
  SET 
      TIPO_RECURSO = pTIPO_RECURSO,
      URL = pURL

  WHERE RECURSO_ID = pRECURSO_ID;

END;