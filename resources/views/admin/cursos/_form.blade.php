<style>
.img-thumbnail {
    object-fit: contain;
    padding: 0.25rem;
    background-color: #fff;
    border: 1px solid #dee2e6;
    border-radius: 0.25rem;
    width: 150px;
    height: 150px;
}
</style>

<div class="input-field">
    <input type="text" name="titulo" value="{{isset($registro->titulo) ? $registro->titulo : ''}}">
    <label>Título</label>
</div>

<div class="input-field">
    <input type="text" name="descricao" value="{{isset($registro->descricao) ? $registro->descricao : ''}}">
    <label>Descrição</label>
</div>

<div class="input-field">
    <input type="text" name="valor" value="{{isset($registro->valor) ? $registro->valor : ''}}">
    <label>Valor</label>
</div>

<div class="file-field input-field">
    <div class="btn blue">
        <span>Imagem</span>
        <input type="file" id="imgCurso" name="imagem">
    </div>
    <div class="file-path-wrapper">
        <input class="file-path validate" type="text">
      </div>
</div>
{{-- @if (isset($registro->imagem)) --}}
    <div class="input-field">
            <img class="img-thumbnail" id="previaimg" style="display:{{isset($registro->imagem) ? 'block' : 'none'}}" src="{{isset($registro->imagem) ? asset($registro->imagem) : ""}}" alt="">
                    {{-- <div class="img-thumbnail" id="defaultimg"></div> --}}
            </div>
{{-- @endif --}}


<div class="input-field">
    <p>
        <label>
          <input type="checkbox" id="test5" name="publicado" {{isset($registro->publicado) && $registro->publicado == 'sim' ? 'checked' : ''}} value="true"/>
          <span>Publicar?</span>
        </label>
      </p>
<br><br>
</div>

<script>

    const inputImg = document.getElementById("imgCurso");
    const previaImg = document.getElementById("previaimg");
    /* const defaultImg = document.getElementById("defaultimg") */
    console.log(inputImg);

    inputImg.addEventListener('change', function (){
        console.log(this.files[0]);

        const imgDados = this.files[0];

        const reader = new FileReader();

        reader.onloadend = function () {
            previaImg.src = reader.result;
        };

        if(imgDados){
            reader.readAsDataURL(imgDados);
           /*  defaultImg.style.display="none"; */
            previaImg.style.display="block";
        }else{
            previaImg.style.display="none";
        }

    });

</script>

