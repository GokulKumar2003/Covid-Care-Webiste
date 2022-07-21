#include<stdio.h>
#include<math.h>

void display(int tree[],int n){
	
	int i;
	
	for(i=1;i<=n;i++){
		printf("%d ",tree[i]);
	}
}

void parent(int tree[],int n){
	
	int i;
	printf("\n\nParent of each node\n Node -> Parent\n");
	for(i=1;i<=n;i++){
		printf("%d -> %d\n",tree[i],tree[i/2]);
	}
	printf("\n\n");
	
}

void height(int tree[],int n, int choice){
	
	int node,i,height,nodesinlevel;
	int maxheight;
	while(choice){
		printf("Type the node: ");
		scanf("%d",&node);
		maxheight = 3;
		height = maxheight;
		nodesinlevel = 2;
		for(i=1;i<nodesinlevel;nodesinlevel= 2*nodesinlevel,height--){
			if(tree[i]==node)
				printf("Height is %d\n",height);
		
		}
		printf("To continue type 1 and to stop type 0");
		scanf("%d",&choice);
		
	}
}

void swap(int tree[],int n){
	
	int i,temp;
	for(i=1;i<=n;i++){
		
		if(2*i>n){
			break;
		}
		
		if(tree[2*i]!=-1 && tree[2*i+1]!=-1){
			temp = tree[2*i];
			tree[2*i]=tree[2*i+1];
			tree[2*i+1]=temp;
		}
	}
}

int main(){
	
	int n;
	
	printf("Type the total number of nodes: ");
	scanf("%d",&n);
	
	int tree[n+1],i,choice,j;
	printf("Type the value of nodes. (level by level and Type -1 if the node is absent)\n");
	
	tree[0]=-1;
	for(i=1;i<=n;i++){
		
		scanf("%d",&tree[i]);
	}
	
	//inserting new node as leftchild of right subtree.
	i=1;
	j=1;
	printf("Type the values of leftchild of right subtree\n");
	for(i=2*i+1;i<=n,j<=1;i++,j++){
		scanf("%d",&tree[2*i]);
		
	}
	printf("After inserting nodes, elements in tree are\n");
	display(tree,n);
	parent(tree,n);
	swap(tree,n);
	printf("After exchanging left and right child, elements in tree are\n");
	//display(tree,n);
	
	printf("To find the height of a particular node, type 1");
	scanf("%d",&choice);
	
	if(choice==1){
		height(tree,n,choice);
	}
	return 0;
}
