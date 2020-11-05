#include<bits/stdc++.h>
using namespace std;

int main()
{
    int n,i,md1,md2,mdn,t;
    vector<int>arr;

    while(cin>>n){
        if(n==-1)
            break;

        arr.clear();
        for(i=0;i<n;i++){
            cin>>t;
            arr.push_back(t);
        }

        sort(arr.begin(),arr.end());

        if(n%2==0){
            md1=(n/2)-1;
            md2= (n/2);
            mdn = (arr[md1]+arr[md2])/2;
            cout<<mdn<<endl;

        }else{
            md2=(n/2);
            cout<<arr[md2]<<endl;
        }



    }

    return 0;
}

