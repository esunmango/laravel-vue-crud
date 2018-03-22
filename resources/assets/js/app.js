
new Vue({
   el:'#crud',
    created : function () {
      this.getKeeps();
    },
   data:{
      keeps:[],
       newKeep : "",
       errors : []
   },
   methods:{
     getKeeps : function () {
         var urlKeeps = 'task';
         axios.get(urlKeeps).then(response =>{
            this.keeps = response.data
         });
     },
       deleteKeep : function (keep) {
           var url = "task/"+keep.id;
           axios.delete(url).then(response =>{
            this.getKeeps();
            toastr.success('Eliminado correctamente');
           });
       },
       createKeep : function () {
           var url = "task"
           axios.post(url,{
               keep : this.newKeep
           }).then(response =>{
               this.getKeeps();
               this.newKeep = "";
               this.errors = [];
               $('#create').modal('hide');
               toastr.success('Nueva tarea creada con exito');
           }).catch(error => {
               this.errors = error.response.data
           });
       }
   }
});
