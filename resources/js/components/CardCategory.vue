<template>
  <div>
    <button class="btn_jb">
        <router-link :to="{name:'advancedSearch', params:{name: nome_categoria}}">
            {{nome_categoria}}
            <!-- {{category_id}} -->
        </router-link>
    </button>
      
  </div>
</template>

<script>
export default {
  name:'CardCategory',
  props:['nome_categoria','category_id'],
  mounted(){
    console.log("questo è card");
    console.log(this.$route.params.category_id);
  }
}
</script>

<style lang='scss' scoped>
    
    .btn_jb{
        background-color: #e56c09;
      line-height: normal;
      padding: 10px 20px;
      font-weight: 400;
      font-size: 20px;
      color: #fff;
      border-radius: 3px;
      outline: none;
      margin: 26px 12px;
      border: none;
      border-radius: 10px;
      &:hover{
        background-color: #ce6108;
        transform: scale(1.05);
      }
      a{
          color: white;
          text-decoration: none;
      }
    }
</style>