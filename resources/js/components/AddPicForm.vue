<template id='AddPicForm'>
    <div class="container">
         <div class="row">
             <div class="col-md-12">
                 <form method="post" action="/pics" method="post" enctype="multipart/form-data">
                     @
                     <div class="form-group">
                         <label for="userIdent">{{userIdent}}</label>
                         <input type="text" class="form-control" id="userIdent" placeholder="This will identify the owner of your pictures">
                     </div>
                     <div class="form-group">
                         <label for="picName">{{picName}}</label>
                         <input type="text" class="form-control" id="picName" placeholder="Give your picture a name">
                     </div>
                     <div class="form-group">
                         <label for="description">{{picDetails}}</label>
                         <textarea class="form-control" id="description" placeholder="Add any details about your picture"></textarea>
                     </div>
                     <button type="submit" class="btn btn-primary">Submit Picture</button>
                 </form>
             </div>
         </div>
    </div>
                 
</template>
<script>
    export default {
        props: ['pics'],
        name: 'AddPicForm',
        mounted() {
            console.log("AddPicForm Component Mounted")
        }
    } 
</script>