<?php //base de datos ztrack_ja
 db.madurador.explain("executionStats").find()

+---------------+-------------------+
| telemetria_id | nombre_contenedor |
+---------------+-------------------+
|            33 | ZGRU1090804       |
|           258 | ZGRU2232647       |
|           259 | ZGRU2009227       |
|           260 | ZGRU2008220       |
+---------------+-------------------+
4 rows in set (0,001 sec)
//Dispositivos de estados Unidos  //telemetria_id : 33 DISPOSITIVO :ZGRU1090804

db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-05-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-05-31T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-05-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-05-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 40128}},{"id": {"$lte": 57279 }}]}' --out=5_2023.json
mongoimport --db ZGRU1090804_5_2023 --collection madurador --file 5_2023.json

db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 148590}},{"id": {"$lte": 225880 }}]}' --out=6_2023.json
mongoimport --db ZGRU1090804_6_2023 --collection madurador --file 6_2023.json

db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-07-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-07-31T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-07-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-07-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 225886}},{"id": {"$lte": 445204 }}]}' --out=7_2023.json
mongoimport --db ZGRU1090804_7_2023 --collection madurador --file 7_2023.json

db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-08-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-08-31T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-08-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-08-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 445206}},{"id": {"$lte": 674365 }}]}' --out=8_2023.json
mongoimport --db ZGRU1090804_8_2023 --collection madurador --file 8_2023.json

db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-09-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-09-30T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-09-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-09-30T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 674392}},{"id": {"$lte": 813817 }}]}' --out=9_2023.json
mongoimport --db ZGRU1090804_9_2023 --collection madurador --file 9_2023.json

db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-10-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-10-31T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-10-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-10-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 813824}},{"id": {"$lte": 1267558 }}]}' --out=10_2023.json
mongoimport --db ZGRU1090804_10_2023 --collection madurador --file 10_2023.json

db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-11-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-11-30T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-11-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-11-30T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 1267581}},{"id": {"$lte": 2499726 }}]}' --out=11_2023.json
mongoimport --db ZGRU1090804_11_2023 --collection madurador --file 11_2023.json

db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-12-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-12-31T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2023-12-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-12-31T23:59:59.999Z")}}]}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 2499781}},{"id": {"$lte": 5017785 }}]}' --out=12_2023.json
mongoimport --db ZGRU1090804_12_2023 --collection madurador --file 12_2023.json

db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 5017856}},{"id": {"$lte": 7756579 }}]}' --out=1_2024.json
mongoimport --db ZGRU1090804_1_2024 --collection madurador --file 1_2024.json


db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2024-02-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-02-29T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 33},{created_at: {$gte: new ISODate("2024-02-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-02-29T23:59:59.999Z")}}]}).sort({id:1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 33},{"id": {"$gte": 7756625}},{"id": {"$lte": 10611589 }}]}' --out=2_2024.json
mongoimport --db ZGRU1090804_2_2024 --collection madurador --file 2_2024.json

//Dispositivos de estados Unidos  //telemetria_id : 258 DISPOSITIVO :ZGRU2232647
//40305 //57309
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-05-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-05-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-05-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-05-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 40305}},{"id": {"$lte": 57309 }}]}' --out=5_2023.json
mongoimport --db ZGRU2232647_5_2023 --collection madurador --file 5_2023.json //3886
//154839 //220944
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 154839}},{"id": {"$lte": 220944 }}]}' --out=6_2023.json
mongoimport --db ZGRU2232647_6_2023 --collection madurador --file 6_2023.json //14004
//300936 //399417
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-07-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-07-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-07-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-07-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 300936}},{"id": {"$lte": 399417 }}]}' --out=7_2023.json
mongoimport --db ZGRU2232647_7_2023 --collection madurador --file 7_2023.json //19190
//487198 //622623
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-08-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-08-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-08-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-08-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 487198}},{"id": {"$lte": 622623 }}]}' --out=8_2023.json
mongoimport --db ZGRU2232647_8_2023 --collection madurador --file 8_2023.json //27073
//715547 //813816
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-09-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-09-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-09-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-09-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 715547}},{"id": {"$lte": 813816 }}]}' --out=9_2023.json
mongoimport --db ZGRU2232647_9_2023 --collection madurador --file 9_2023.json //24309
//813823 //1267555
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-10-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-10-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-10-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-10-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 813823}},{"id": {"$lte": 1267555 }}]}' --out=10_2023.json
mongoimport --db ZGRU2232647_10_2023 --collection madurador --file 10_2023.json //39539
//1267580 //1740508
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-11-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-11-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-11-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-11-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 1267580}},{"id": {"$lte": 1740508 }}]}' --out=11_2023.json
mongoimport --db ZGRU2232647_11_2023 --collection madurador --file 11_2023.json //19314
//3100181 //5017783
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-12-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-12-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2023-12-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-12-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 3100181}},{"id": {"$lte": 5017783 }}]}' --out=12_2023.json
mongoimport --db ZGRU2232647_12_2023 --collection madurador --file 12_2023.json //22793
//5017914 //7756596
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 5017914}},{"id": {"$lte": 7756596 }}]}' --out=1_2024.json
mongoimport --db ZGRU2232647_1_2024 --collection madurador --file 1_2024.json //39819
//7756648 //10611571
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2024-02-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-02-29T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 258},{created_at: {$gte: new ISODate("2024-02-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-02-29T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 258},{"id": {"$gte": 7756648}},{"id": {"$lte": 10611571 }}]}' --out=2_2024.json
mongoimport --db ZGRU2232647_2_2024 --collection madurador --file 2_2024.json //38731


//Dispositivos de estados Unidos  //telemetria_id : 259 DISPOSITIVO :ZGRU2009227
//40829 //57305
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-05-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-05-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-05-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-05-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 40829}},{"id": {"$lte": 57305 }}]}' --out=5_2023.json
mongoimport --db ZGRU2009227_5_2023 --collection madurador --file 5_2023.json //783
//148508 //225882
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 148508}},{"id": {"$lte": 225882 }}]}' --out=6_2023.json
mongoimport --db ZGRU2009227_6_2023 --collection madurador --file 6_2023.json //16680
//225885 //445203
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-07-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-07-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-07-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-07-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 225885}},{"id": {"$lte": 445203 }}]}' --out=7_2023.json
mongoimport --db ZGRU2009227_7_2023 --collection madurador --file 7_2023.json //63921
//445205 //674376
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-08-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-08-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-08-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-08-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 445205}},{"id": {"$lte": 674376 }}]}' --out=8_2023.json
mongoimport --db ZGRU2009227_8_2023 --collection madurador --file 8_2023.json //60649
//674379 //813813
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-09-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-09-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-09-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-09-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 674379}},{"id": {"$lte": 813813 }}]}' --out=9_2023.json
mongoimport --db ZGRU2009227_9_2023 --collection madurador --file 9_2023.json //41604
//813820 //1267544
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-10-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-10-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-10-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-10-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 813820}},{"id": {"$lte": 1267544 }}]}' --out=10_2023.json
mongoimport --db ZGRU2009227_10_2023 --collection madurador --file 10_2023.json //40995
//1267567 //2499616
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-11-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-11-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-11-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-11-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 1267567}},{"id": {"$lte": 2499616 }}]}' --out=11_2023.json
mongoimport --db ZGRU2009227_11_2023 --collection madurador --file 11_2023.json //38118
//2499768 //5017801
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-12-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-12-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2023-12-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-12-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 2499768}},{"id": {"$lte": 5017801 }}]}' --out=12_2023.json
mongoimport --db ZGRU2009227_12_2023 --collection madurador --file 12_2023.json //38713
//5017861 //7756595
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 5017861}},{"id": {"$lte": 7756595 }}]}' --out=1_2024.json
mongoimport --db ZGRU2009227_1_2024 --collection madurador --file 1_2024.json //39218
//7756647 //10611545
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2024-02-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-02-29T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 259},{created_at: {$gte: new ISODate("2024-02-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-02-29T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 259},{"id": {"$gte": 7756647}},{"id": {"$lte": 10611545 }}]}' --out=2_2024.json
mongoimport --db ZGRU2009227_2_2024 --collection madurador --file 2_2024.json //27963

db.madurador.explain("executionStats").find()
//Dispositivos de estados Unidos  //telemetria_id : 260 DISPOSITIVO :ZGRU2008220
//44303 //57308
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-05-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-05-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-05-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-05-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 44303}},{"id": {"$lte": 57308 }}]}' --out=5_2023.json
mongoimport --db ZGRU2008220_5_2023 --collection madurador --file 5_2023.json //464
//154852 //225881 
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-06-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-06-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 154852}},{"id": {"$lte": 225881 }}]}' --out=6_2023.json
mongoimport --db ZGRU2008220_6_2023 --collection madurador --file 6_2023.json //16696
//225884 //375144
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-07-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-07-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-07-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-07-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 225884}},{"id": {"$lte": 375144 }}]}' --out=7_2023.json
mongoimport --db ZGRU2008220_7_2023 --collection madurador --file 7_2023.json //38381
//540001 //674377
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-08-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-08-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-08-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-08-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 540001}},{"id": {"$lte": 674377 }}]}' --out=8_2023.json
mongoimport --db ZGRU2008220_8_2023 --collection madurador --file 8_2023.json //31087
//674380 //813790
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-09-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-09-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-09-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-09-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 674380}},{"id": {"$lte": 813790 }}]}' --out=9_2023.json
mongoimport --db ZGRU2008220_9_2023 --collection madurador --file 9_2023.json //41300
//813856 //1189399
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-10-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-10-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-10-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-10-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 813856}},{"id": {"$lte": 1189399 }}]}' --out=10_2023.json
mongoimport --db ZGRU2008220_10_2023 --collection madurador --file 10_2023.json //33014
//1189399 // raro
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-11-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-11-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-11-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-11-30T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 1189399}},{"id": {"$lte": 1740508 }}]}' --out=11_2023.json
mongoimport --db ZGRU2008220_11_2023 --collection madurador --file 11_2023.json //1
//3109026 //5017813
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-12-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-12-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2023-12-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2023-12-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 3109026}},{"id": {"$lte": 5017813 }}]}' --out=12_2023.json
mongoimport --db ZGRU2008220_12_2023 --collection madurador --file 12_2023.json //26840
//5017877 //7165118
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2024-01-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-01-31T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 5017877}},{"id": {"$lte": 7165118 }}]}' --out=1_2024.json
mongoimport --db ZGRU2008220_1_2024 --collection madurador --file 1_2024.json //28381
//9672749 //10611585
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2024-02-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-02-29T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:1}).limit(1)
db.madurador.find({ $and: [{telemetria_id: 260},{created_at: {$gte: new ISODate("2024-02-01T00:00:00.000Z")}},{created_at: {$lte: new ISODate("2024-02-29T23:59:59.999Z")}}]},{created_at:1,telemetria_id:1,id:1}).sort({id:-1}).limit(1)
mongoexport --db=ztrack_ja --collection=madurador --query='{ "$and": [{"telemetria_id": 260},{"id": {"$gte": 9672749}},{"id": {"$lte": 10611585 }}]}' --out=2_2024.json
mongoimport --db ZGRU2008220_2_2024 --collection madurador --file 2_2024.json //11041


?>