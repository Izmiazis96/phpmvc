--DROP TABLE ADMIN.NAB_ULINK CASCADE CONSTRAINTS;

CREATE TABLE ADMIN.NAB_ULINK
(
  ID            VARCHAR2(50 BYTE),
  KD_FUND       VARCHAR2(10 BYTE),
  TANGGAL_NAB   DATE,
  NILAI_NAB     NUMBER,
  ID_NASABAH    VARCHAR2(50 BYTE),
  CLIENT_CD_MI  VARCHAR2(50 BYTE)
)
TABLESPACE SYSTEM
PCTUSED    40
PCTFREE    10
INITRANS   1
MAXTRANS   255
STORAGE    (
            INITIAL          64K
            NEXT             1M
            MINEXTENTS       1
            MAXEXTENTS       UNLIMITED
            PCTINCREASE      0
            FREELISTS        1
            FREELIST GROUPS  1
            BUFFER_POOL      DEFAULT
           )
LOGGING 
NOCOMPRESS 
NOCACHE;


CREATE UNIQUE INDEX ADMIN.NAB_ULINK_PK ON ADMIN.NAB_ULINK
(ID)
LOGGING
TABLESPACE SYSTEM
PCTFREE    10
INITRANS   2
MAXTRANS   255
STORAGE    (
            INITIAL          64K
            NEXT             1M
            MINEXTENTS       1
            MAXEXTENTS       UNLIMITED
            PCTINCREASE      0
            FREELISTS        1
            FREELIST GROUPS  1
            BUFFER_POOL      DEFAULT
           );

ALTER TABLE ADMIN.NAB_ULINK ADD (
  CONSTRAINT NAB_ULINK_PK
  PRIMARY KEY
  (ID)
--  USING INDEX ADMIN.NAB_ULINK_PK
  --ENABLE VALIDATE
  );


DROP SEQUENCE ADMIN.ID_SEQ;

CREATE SEQUENCE ADMIN.ID_SEQ
  START WITH 1
  MAXVALUE 9999999999999999999999999999
  MINVALUE 1
  NOCYCLE
  CACHE 20
  NOORDER;


CREATE OR REPLACE TRIGGER ADMIN.AUTO_ID
BEFORE INSERT ON ADMIN.NAB_ULINK
FOR EACH ROW
BEGIN
SELECT ID_seq.NEXTVAL
INTO :new.id
FROM dual;
END;
/




control B untuk comment.
f5 untuk execute.

