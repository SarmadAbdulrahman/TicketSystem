select   SAAB||'-'|| SAAN ||'-'|| SAAS as Account, saccy   as Currency  ,  '20'|| substr( max(sapod)  ,2,2)|| '-' || substr( max(sapod)  ,4,2)||'-' ||substr( max(sapod)  ,6,2) Last_Posting_Date,
scshna as Customer_Name , sum(scbal/c8pwd )  Balance,AAZMPHN PhoneNumber,SCAI20 inactive from (


SELECT    SAAB, SAAN , SAAS  , saccy   , max(sapod) SAPOD
                                                                     FROM  kfil110.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas , saccy


union

SELECT    SAAB, SAAN , SAAS    , saccy   , max(sapod) SAPOD
                                                                     FROM  kfil111.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas    , saccy
union


SELECT    SAAB, SAAN , SAAS  , saccy    , max(sapod) SAPOD
                                                                     FROM  kfil112.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas   , saccy
union



SELECT    SAAB, SAAN , SAAS  , saccy    , max(sapod) SAPOD
                                                                     FROM  kfil113.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas  , saccy
union



SELECT    SAAB, SAAN , SAAS  , saccy    , max(sapod) SAPOD
                                                                     FROM  kfil114.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas  , saccy
union


SELECT    SAAB, SAAN , SAAS   , saccy   , max(sapod) SAPOD
                                                                     FROM  kfil115.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas  , saccy
union


SELECT    SAAB, SAAN , SAAS  , saccy    , max(sapod) SAPOD
                                                                     FROM  kfil116.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas  , saccy
union


SELECT    SAAB, SAAN , SAAS  , saccy    , max(sapod) SAPOD
                                                                     FROM  kfil117.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY','DM11','DM12','SV11','SV12')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas  , saccy
union


SELECT    SAAB, SAAN , SAAS  , saccy    , max(sapod) SAPOD
                                                                     FROM  kfil118.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY','DM11','DM12','SV11','SV12')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas  , saccy
union


SELECT    SAAB, SAAN , SAAS , saccy , max(sapod) SAPOD
                                                                     FROM  kfil119.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY','DM11','DM12','SV11','SV12')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas  , saccy
union


SELECT    SAAB, SAAN , SAAS , saccy , max(sapod) SAPOD
                                                                     FROM  kfil120.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY','DM11','DM12','SV11','SV12')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas  , saccy
union


SELECT    SAAB, SAAN , SAAS  , saccy    , max(sapod) SAPOD
                                                                     FROM  kfilliv.safflf as t0
                                                                     left join kfilliv.scpf  as t2  on  t2.scab||t2.scan||t2.scas=t0.saab||t0.saan||t0.saas
                                                                    where  t0.saab ='@branch' and sapbr  NOT IN ('@@CI', '@@DI', '@@CQ', '@@SC', '@@AC', 'MGSV', 'SRVC','DMCY')
and((b0cbgl like '251%' and  b0cbgl not like '2519%') or b0cbgl like '2521%')
and t2.sccad=0   group by  saab , saan, saas  , saccy

union
select scab   saab   ,scan    saan,scas   saas   , scccy saccy  , 0   sapod
                                                                    from kfilliv.scpf as t0 left join kfilliv.b0pf as t1  on  t0.scab||t0.scan||t0.scas=t1.b0ab||t1.b0an||t1.b0as
                                                                    where  SCOAD<1180101  and SCCAD=0  and  t0.scab='@branch' and  t0.sccad=0 and ( t1.b0cbgl like '252%' or  (t1.b0cbgl like '251%' and  t1.b0cbgl not like '2519%'))

) as t0

left join kfilliv.scpf on saab=scab and saan=scan and saas=scas
left join kfilliv.aazpf   on AAZCUS = scan
left join kfilliv.c8pf on scccy=c8ccy
group by   SAAB, SAAN , SAAS    , saccy     , scshna,AAZMPHN,SCAI20 ) taccount
where Last_Posting_Date <=  '" + TDate.Text + @"'
 and Last_Posting_Date !='20  -  -  '
order by Last_Posting_Date
