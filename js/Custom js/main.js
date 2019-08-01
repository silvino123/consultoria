// vas a hacer un controlador asi donde obtienes tu consulta sql
const express=require('express');
function getAlluser(){
  request.query('select * from usuarios',(err,res)=>{
    if(err) return res.status(500).send({message:'problemas con el servidor'})
    if(!res) return res.status(404).send({message:'usuario no existente'})
    return res.status(200).send({ project: projectUpdate })
    })
    
}
