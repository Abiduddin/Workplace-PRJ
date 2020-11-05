#include<bits/stdc++.h>
using namespace std;


int fabo(int n){
    if(n<=1)
        return n;


    return fabo(n-1)+fabo(n-2);
}

int main()
{
    int a;
    while(cin>>a){
        a = fabo(a);
        cout<<a<<endl;
    }
    return 0;
}
