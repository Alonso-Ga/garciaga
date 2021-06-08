$('document').ready(function () 
{
    $.post('restaurantes.php', function (ret) {
                 $("#tablaJSGRID").jsGrid({
                 width: "100%",
                 height: "400px",
                 inserting: true,
                 editing: true,
                 sorting: true,
                 paging: true,
                 data: ret,
                 onItemDeleted: function(args) {   console.log(args.item);  },
                 fields: [{ name: "id_restaurante",type: "text",title: "ID",         width: 30,validate: "required"},
                         { name: "Nombre_restaurante",    type: "text",title: "Nombre",     width: 100},
                         { name: "Calificacion", type: "number",title: "Calificación", width: 55},
                         { name: "Nombre_ciudad", type: "text",title: "Ciudad", width: 50},
                         ],
                });
            }
    ,'json');
});