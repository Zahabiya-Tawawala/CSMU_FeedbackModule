# import pymysql
# import pandas as pd


# host = 'localhost'
# user = 'root'
# password = ''
# database = 'student-feedbackform'


# conn = pymysql.connect(host=host, user=user, password=password, database=database)
# cursor = conn.cursor()

# file_path = r'C:/Users/91775/Downloads/student-email.xlsx'

# # Read Excel file into a DataFrame
# df = pd.read_excel(file_path)
# # df = pd.read_excel('C:\Users\91775\Downloads\student-email.xlsx')
# # file_path = 'C:/Users/91775/Downloads/student-email.xlsx'
# # print("File path:", file_path)
# # df = pd.read_excel(file_path)
# # Print the column names of the DataFrame
# print(df.columns)



# emails = df['email']

# for email in emails:
#     try:
#         cursor.execute("INSERT INTO studentemails (email) VALUES (%s)", (email,))
#         conn.commit()
#     except pymysql.Error as e:
#         print(f"Error inserting email {email}: {e}")


# cursor.close()
# conn.close()



# import pandas as pd

# # File path to the Excel file
# file_path = r'C:/Users/91775/Downloads/student-email.xlsx'

# try:
#     # Read Excel file into a DataFrame
#     df = pd.read_excel(file_path)

#     # Print column names for reference
#     print("Column names:", df.columns)

#     # Print the first few rows of the DataFrame
#     print("First few rows:")
#     print(df.head())

#     # Check if 'email' column exists in the DataFrame
#     if 'email' in df.columns:
#         # Access the 'email' column
#         emails = df['email']
#         print("Emails:", emails)
#     else:
#         print("Error: 'email' column not found in the DataFrame.")

# except Exception as e:
#     print("Error:", e)


import pandas as pd

# File path to the Excel file
file_path = r'C:/Users/91775/Downloads/student-email.xlsx'

try:
    # Read Excel file into a DataFrame, specify the header
    df = pd.read_excel(file_path, header=None)

    # Name the column containing email addresses as 'email'
    df.columns = ['email']

    # Print column names for reference
    print("Column names:", df.columns)

    # Print the first few rows of the DataFrame
    print("First few rows:")
    print(df.head())

except Exception as e:
    print("Error:", e)


import pandas as pd
import pymysql

# File path to the Excel file
file_path = r'C:/Users/91775/Downloads/student-email.xlsx'

import pandas as pd
import pymysql

# File path to the Excel file
file_path = r'C:/Users/91775/Downloads/student-email.xlsx'


host = 'localhost'
user = 'root'
database = 'student-feedbackform'

try:
   
    df = pd.read_excel(file_path, header=None)

  
    df.columns = ['email']

    df = df.dropna()

  
    emails = df['email']

    conn = pymysql.connect(host=host, user=user, database=database)
    cursor = conn.cursor()


    for email in emails:
        cursor.execute("INSERT INTO studentemails (email) VALUES (%s)", (email,))

 
    conn.commit()
    conn.close()

    print("Email addresses inserted successfully!")

except Exception as e:
    print("Error:", e)




