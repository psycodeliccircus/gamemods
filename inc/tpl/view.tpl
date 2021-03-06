<div class="view">
   <div class="cf marg">
      <h2 id="modname">%name% <span>%version%</span> %edit_btn%</h2>
      <div class="lft">

         <a class="btn down_btn" href="download/%seo%"><i class="fa-solid fa-download"></i> Download </a>

         <div class="wbox cf">
            <a href="user/%auth_user%"><div class="prof_pic" style="background-image:url(%site_url%uploads/avatars/%auth_avatar%_thumb.jpg);"></div></a>
            <div class="extras">
               <div class="username"><a href="user/%auth_user%">%author%</a></div>
               <div class="">
               </div>
            </div>
         </div>

         <div class="wbox">
		    <div class="desc">%description%</div>
            <div class="upinfos">
               <table>
                  <tr><td>Transferências:</td><td>%downs%</td></tr>
                  <tr><td>Data de carregamento:</td><td>%up_date%</td></tr>
                  %last_edited%
               </table>
            </div>
         </div>

         %ads_1%

      </div>

      <div class="rgt">
         <div class="image" onclick="oid(this);" style="background-image:url(%site_url%uploads/imgs/%front_image%.jpg);"></div>

         %gallery%

         %ads_3%

         <h2 class="comments_title">Comentários (<span id="total_comments">%num_com%</span>)</h2>

         %lm_comments%

         <div class="comments_list">%comments%</div>

         <div class="wbox" id="comments_text" style="display:%com_style%;">
            <form onsubmit="return false;">
               <input type="hidden" name="mod_id" value="%mod_id%">
               <textarea name="comment" placeholder="Adicione seu comentário..." maxlength="1500"></textarea>
               <input type="button" value="Adicionar comentário" onclick="add_comment(this.form, this);">
            </form>
         </div>

         %join_con%

      </div>

   </div>
</div>
