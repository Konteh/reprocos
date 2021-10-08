 const {
    createPool
} = require('mysql');

const pool = createPool ({
    host: "localhost",
    user:"root",
    password:"",
    database: "poultry",
    connectionLimit:10
})

pool.query(`select * from costumers`,(err, result,fields)=>{
    if(err){
        return console.log(err);
    }
    return console.log(result)
})