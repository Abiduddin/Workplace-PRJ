#include<bits/stdc++.h>
using namespace std;

bool sortinrev(const pair<int,int> &a,
               const pair<int,int> &b)
{
       return (a.first > b.first);
}

int main()
{
    int i,t,n,l,d,c;
    vector<pair<int,int>> ar[4];


    cin>>t;
    while(t--){
        for(i=1;i<4;i++){
            ar[i].clear();
        }
        cin>>n;
        while(n--){
            cin>>c>>l>>d;
            ar[l].push_back(make_pair(d,c));
        }

        for(i=1;i<4;i++){
            sort(ar[i].begin(),ar[i].end(),sortinrev);
        }

        for(i=1;i<4;i++){
            int k=0,p,o,ii,ip;

            p= ar[i][k].second;
            o=ar[i][k+1].second;
            ii= ar[i][k].first;
            ip=ar[i][k+1].first;
            while((ii==ip)&& (p>=o)){
                k++;
                p= ar[i][k].second;
                o=ar[i][k+1].second;
                ii= ar[i][k].first;
                ip=ar[i][k+1].first;


            }

            cout<<ar[i][0].first<<" "<<ar[i][k].second<<endl;
        }


    }



    return 0;
}


