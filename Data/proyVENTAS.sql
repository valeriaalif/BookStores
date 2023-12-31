 drop table Ventas;
CREATE TABLE "VENTAS" 
   (	"VENTA_ID" NUMBER GENERATED ALWAYS AS IDENTITY , 
	"DESC_VENTA" VARCHAR2(100 BYTE), 
	"PROD_VENDIDO" VARCHAR2(100 BYTE), 
	"DETALLE" VARCHAR2(100 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 1048576 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT);
  
  create or replace NONEDITIONABLE PROCEDURE "ACTUALIZARVENTA" (

  pVENTA_ID IN ventas.VENTA_ID%TYPE,
  pDESC_VENTA IN ventas.DESC_VENTA%TYPE,
  pPROD_VENDIDO IN ventas.PROD_VENDIDO%TYPE,
  pDETALLE IN ventas.DETALLE%TYPE DEFAULT NULL
) AS
  
BEGIN

  UPDATE VENTAS
  SET 
      DESC_VENTA = pDESC_VENTA,
      PROD_VENDIDO = pPROD_VENDIDO,
      DETALLE = pDETALLE

  WHERE VENTA_ID = pVENTA_ID;

END;

create or replace NONEDITIONABLE PROCEDURE "CONSULTARVENTA" (
    pVENTA_ID IN NUMBER,
    pCursor OUT SYS_REFCURSOR
) AS
BEGIN
    OPEN pCursor FOR
        SELECT  VENTA_ID,
                DESC_VENTA,
                PROD_VENDIDO,
                DETALLE
        FROM VENTAS
        WHERE VENTA_ID = pVENTA_ID;
END;

create or replace NONEDITIONABLE PROCEDURE "ELIMINAR_VENTA" (pVENTA_ID IN NUMBER)
IS
BEGIN

    DELETE FROM VENTAS WHERE VENTA_ID = pVENTA_ID;
END;

create or replace NONEDITIONABLE PROCEDURE "INSERTAR_VENTA" 
(
    pDESC_VENTA IN VARCHAR2,
    pPROD_VENDIDO IN VARCHAR2 ,
    pDETALLE IN VARCHAR2 
) AS 
BEGIN
    INSERT INTO VENTAS (DESC_VENTA,PROD_VENDIDO,DETALLE) VALUES ( pDESC_VENTA, pPROD_VENDIDO, pDETALLE);
END;

select * from Ventas;