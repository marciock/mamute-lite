<?php $id=$_GET['id']; echo $id; ?>
 <div class="row mt-5">
            <div class="col">
                <div class="row border" id="img-view">
                    <img src="uploads/<?php echo $fetchProduto['img']; ?>" >
                </div>
                <div class="row" id="img-min">
                    <?php foreach($fetchImagem as $min): ?>  
                                
                        <div class="col border">
                            <a href="#" data-id="<?php echo $min['id_imagem']?>">
                            <img src="uploads/<?php echo $min['img']?>" style="width:64px; height:auto; margin-left:25%;  ">
                            </a>
                        </div>

                    <?php endforeach; ?>
                </div>
            </div>
            <div class="col" id="description">
                                    
                <div class="ml-auto">
                        <h2 class="text-center mb-5 mt-2">
                            <?php echo $fetchProduto['produto']." Marca - ".$fetchProduto['marca'];  ?>
                         </h2>
                        <h4 class="text-justify"><?php echo $fetchProduto['descricao']; ?> </h4>
                        <h4 class="mt-5">
                        <strong><?php echo "Valor:{$fetchProduto['preco']}" ; ?></strong></h4>
                </div>
               
            </div>
          
</div>



<script>
         const imgView=document.getElementById('img-view');
         const imgButtons=document.querySelectorAll('[data-id]');

        imgButtons.forEach((m)=>{
           
            m.addEventListener('mouseover',()=>{
             let url=m.childNodes[1].src
             console.log(m.childNodes[1].src)
             console.log(m)

             let myImage=`<img src="${url}">`;

             imgView.innerHTML=myImage;
            })
        })
      

</script>




