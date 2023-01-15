INSERT INTO HRIS_LOAN_CASH_PAYMENT
(
ID,
LOAN_ID,
EMPLOYEE_ID,
REMARKS,
PAYMENT_AMOUNT,
CREATED_DT,
MODIFIED_DT,
payment_date,
type
)
SELECT 
(SELECT NVL(MAX(ID), 0)+1 FROM HRIS_LOAN_CASH_PAYMENT),
C.LOAN_ID, 
ltrim(SUBSTR(A.SUB_CODE, 2), '0') AS EMPLOYEE_ID,
A.PARTICULARS,
A.CR_AMOUNT,
A.CREATED_DATE,
A.MODIFY_DATE,
A.MODIFY_DATE,
'PRN'
FROM 
(
select * from FA_VOUCHER_SUB_DETAIL@EMPNEW WHERE ACC_CODE IN (
SELECT ACC_CODE FROM HR_PAY_SETUP@EMPNEW WHERE PAY_CODE IN (
SELECT DISTINCT ADVANCE_TYPE FROM Hr_Advance_Request@EMPNEW
)
--AND voucher_no like '%JV-%' 
and lower(particulars) not like '%salary sheet%'
) 
) A
 JOIN HR_PAY_SETUP@EMPNEW B ON (A.ACC_CODE=B.ACC_CODE)
 JOIN HRIS_LOAN_MASTER_SETUP C ON  (C.LOAN_CODE=B.PAY_CODE)
  WHERE A.CR_AMOUNT IS NOT NULL AND A.TRANSACTION_TYPE = 'CR'
  AND LOWER(A.PARTICULARS) NOT LIKE '%interest%';