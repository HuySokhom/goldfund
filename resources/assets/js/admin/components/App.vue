<template>
	<div id="app">
		<md-sidenav class="md-fixed main-sidebar" ref="leftSidenav">
      <div class="top-of-side-bar">
        <md-image md-src="./assets/logo.png" style="height:100px"></md-image> 
      </div>
      <div class="main-sidebar-links">
	      <md-list>
  				<router-link :to="{ path: '/user'}" tag="md-list-item">
						<md-icon><i class="fa fa-user"></i></md-icon><span>User</span>
  				</router-link>
		      <router-link :to="{ path: '/customer'}" tag="md-list-item">
						<md-icon><i class="fa fa-users"></i></md-icon><span>Customer</span>
  				</router-link>

			    <md-list-item>
			      <md-icon>whatshot</md-icon>
			      <span>Plans</span>

			      <md-list-expand>
			        <md-list>
			          <md-list-item class="md-inset">Plan 1</md-list-item>
			          <md-list-item class="md-inset">Plan 2</md-list-item>
			          <md-list-item class="md-inset">Plan 3</md-list-item>
			        </md-list>
			      </md-list-expand>
			    </md-list-item>
			  </md-list>
			</div>
	  </md-sidenav>

		<div class="page-content" ref="pageContent">
		  <md-toolbar class="top-bar">
			  <div class="md-toolbar-container">
			    <md-button class="md-icon-button" id="btn-toggle-sidebar" @click="toggleLeftSidenav">
			      <md-icon>menu</md-icon>
			    </md-button>

			    <span style="flex: 1;"></span>

			    <div class="dropdown user-dropdown">
				    <a href="#" class="dropdown-toggle user-link" data-toggle="dropdown" aria-expanded="true">
					  	<md-avatar class="user-avatar">
							  <img src="https://placeimg.com/40/40/people/5" alt="Avatar">
							</md-avatar>
							<span class="user-name">administrator</span>
						</a>
	          <ul class="dropdown-menu">
					    <li><a href="/admin/logout">Logout</a></li>
					  </ul>
					 </div>
			  </div>
			</md-toolbar>
		  
		  <div class="main-content">
		    <router-view></router-view>
		  </div>
	  </div>
	</div>
</template>

<script>
export default {
	created(){
		
	},

	mounted(){
		this.toggleLeftSidenav();
	},
	
  methods: {
    toggleLeftSidenav() {
      this.$refs.leftSidenav.toggle();
      
      var el_page_ontent = this.$refs.pageContent;

      $(el_page_ontent).toggleClass('open-nav');
    }
  }
}
</script>

<style lang="scss">
body.md-theme-app{
	background-color: #ecf0f5 !important;
}

.page-content{
	margin-left: 0;
	transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);

	&.open-nav{
		margin-left: 280px
	}

	.main-content{
		padding: 15px;
		background-color: #ecf0f5;
	}
}

.main-sidebar{
	.md-sidenav-content{
		width: 280px;
		left: -280px;
		transition: all 0.4s cubic-bezier(0.25, 0.8, 0.25, 1);
		background-color: #222d32 !important;
		display: flex;
		flex-flow: column;
		overflow: hidden;

		.main-sidebar-links{
			flex: 1;
			overflow: auto;

			.md-list-expand{
				.md-list-item{
					.md-button{
						padding-left: 84px;
					}
				}
			}
		}

		.top-of-side-bar{
	    width: 100%;
	    min-height: 120px;
	    display: flex;
	    align-items: center;
	    justify-content: center;
	    background: #fff;
		}

		.md-theme-app.md-list .md-list-item-container{
			background-color: inherit;
		}

		.md-list-expand .md-list.md-theme-app{
			background-color: rgba(153,153,153,0.05);
		}
	}

	&.md-active{
		.md-sidenav-content{
			left: 0;
		}

		.md-sidenav-backdrop{
			display: none;
		}
	}

	.md-theme-app.md-list{
		background-color: #222d32;
		color: #fff;

		.md-list-item .md-icon{
			color: #fff;
		}
	}

	.md-theme-app.md-list .md-list-item-expand .md-list-item-container:hover, 
	.md-theme-app.md-list .md-list-item-expand .md-list-item-container:focus,
	.md-button:hover:not([disabled]):not(.md-raised) {
    background-color: rgba(153,153,153,0.2);
	}
}

#btn-toggle-sidebar{
	color: #fff;
}

.md-divider.md-inset{
	margin-left: 0;
}

.top-bar{
	z-index: 99;

	.user-link{
		text-decoration: none !important;
		color: #fff !important;
		padding: 24px 10px;

		&:hover{
			background-color: rgba(0, 0, 0, 0.12);
		}
	}

	.user-dropdown{		
		.dropdown-menu{
			border-radius: 0;
			border: 1px solid rgba(0, 0, 0, 0.06);

			a{
				text-decoration: none;
				
				&:hover{
					background-color: rgba(0, 0, 0, 0.06);
				}
			}
		}
	}

	.user-avatar{
		margin: inherit;
	}

	.user-name{
		margin-left: 10px;
	}
}
</style>