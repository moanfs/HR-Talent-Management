from sklearn.preprocessing import MinMaxScaler
from sklearn import preprocessing
import operator
import functools
from ntpath import join
import pandas as pd
import joblib
import numpy as np
import mysql.connector
from pathlib import Path
import os
from os import popen
import sys

dbase = mysql.connector.connect(
    host='localhost',
    database='db_talent',
    user='root',
    password=''
)

mycursor = dbase.cursor()

umur = dbase.cursor()
umur.execute(
    "SELECT data from tb_data ORDER BY id_data desc limit 1")
hasil = umur.fetchone()
# print(hasil)


def convertTuple(tup):
    str = functools.reduce(operator.add, (tup))
    return str


# Driver code
tuple = (hasil)
str = convertTuple(tuple)


def convertTuple2(tup2):
    st = ''.join(map(str, tup2))
    return st


# Driver code
tuple = ('public/uploads/berkas/', str)
str = convertTuple(tuple)
# print(str)

data = pd.read_csv(str)
# print(data)
model_file = 'public/model/neighbors_model.sav'
loaded_model = joblib.load(model_file)


features = data.loc[:, 'MD':'P3_(SKOR JANG)'].values

# scaler = preprocessing.MinMaxScaler(feature_range=(0, 10)).fit(features)
# scaled_feature = scaler.transform(features)


label = data['NIP']
name = data['NAME']
result = loaded_model.predict(features)

hasil = pd.DataFrame(result)

df = pd.concat([label, name, hasil], axis=1)
print(df)
# df.to_csv("hasil.csv", index=False)
