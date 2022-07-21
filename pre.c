#include <stdio.h>
#include <stdlib.h>
 

struct Node
{
    int key;
    struct Node *left, *right;
};
 

struct Node* newNode(int key)
{
    struct Node* node = (struct Node*)malloc(sizeof(struct Node));
    node->key = key;
    node->left = node->right = NULL;
 
    return node;
}
 

void inorder(struct Node* root)
{
    if (root == NULL) {
        return;
    }
 
    inorder(root->left);
    printf("%d ", root->key);
    inorder(root->right);
}
 
struct Node* constructBST(int preorder[], int start, int end)
{
    
    if (start > end) {
        return NULL;
    }
 
    
    struct Node* node = newNode(preorder[start]);
 
    
    int i;
    for (i = start; i <= end; i++)
    {
        if (preorder[i] > node->key) {
            break;
        }
    }
 
    
    node->left = constructBST(preorder, start + 1, i - 1);
 
   
    node->right = constructBST(preorder, i, end);
 
   
    return node;
}
 
int main(void)
{
   
 
    int preorder[] = { 3, 2, 1 };
    int n = sizeof(preorder)/sizeof(preorder[0]);
 
    
    struct Node* root = constructBST(preorder, 0, n - 1);
 
    
    printf("Inorder traversal of BST is ");
 
    
    inorder(root);
 
    return 0;
}
