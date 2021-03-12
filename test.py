#! /usr/bin/python3
# -*- coding: utf-8 -*-

import pyodbc
server = './CHUBXHLAV.database.windows.net'
database = 'FUSION4_0'
username = 'FUSION_USER'
password = 'P_@&&word123'   
driver= '{ODBC Driver 17 for SQL Server}'

with pyodbc.connect('DRIVER='+driver+';SERVER='+server+';PORT=1433;DATABASE='+database+';UID='+username+';PWD='+ password) as conn:
    with conn.cursor() as cursor:
        cursor.execute("SELECT TOP 3 name, collation_name FROM sys.databases")
        row = cursor.fetchone()
        while row:
            print (str(row[0]) + " " + str(row[1]))
            row = cursor.fetchone()
