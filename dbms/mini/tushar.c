#include<stdio.h>
#include<string.h>
int main()
{
	char a[100];
	int c1=0,c2=0,c3=0,i,j;
	printf("Enter code :");
    scanf("%s",&a);	
    int b=strlen(a);
    for(j=0;j<b;j++)
    {	
		for(i=0;i<b;i++)
		{
				
			if(a[i]=='(' )
			{
				c1++;
				i++;
			}				
			else if(a[i]=='{' )
			{
				c2++;
				i++;
			}			
			else if(a[i]=='[' )
			{
				c3++;
				i++;
			}
			else if(a[i]==')' )
			{
				c1++;
				i++;
			}				
			else if(a[i]=='}' )
			{
				c2++;
				i++;
			}			
			else if(a[i]==']' )
			{
				c3++;
				i++;
			}		
	    }
    }	
	if(c1%2==0 && c2%2==0 && c3%2==0)
	{
        printf("Code is error free");
	}
	else
	{
        printf("Unbalance bracket");
	}
}