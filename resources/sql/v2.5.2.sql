USE phoenix;

SET NAMES 'utf8';

DROP VIEW View_Acl_Rights;

-- Start Transaction
START TRANSACTION;

UPDATE operations SET op_stamp_end  = ADDTIME(op_stamp_end, '23:59:59'), op_dateConso_end = ADDTIME(op_dateConso_end, '23:59:59'), op_datePoste_end = ADDTIME(op_datePoste_end, '23:59:59');

COMMIT;
-- End transaction.
