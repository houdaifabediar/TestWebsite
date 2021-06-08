DECLARE @date datetime = GETDATE()

SELECT                   
     DATEADD(WEEK, DATEDIFF(WEEK, 0, GETDATE()), 0) AS [FirstDayOfWeekMonday]  /*Difference in weeks between date and 0 = (1900-01-01 was Monday) for weeks starting Monday*/
    ,DATEADD(WEEK, DATEDIFF(WEEK, -1, GETDATE()), 0) AS [FirstDayOfWeekSunday] /*Difference in weeks between date and -1 = (1899-12-31 was Sunday) for weeks starting Sunday*/
GO
