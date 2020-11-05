#include<bits/stdc++.h>
using namespace std;

void char_loop(){
    char a[1000];

    scanf("%[^\n]",&a);
    for(int i=strlen(a);i>=0;i--){
        cout<<a[i];

    }
}

void str_word(){
    string a;

    getline(cin,a);
    int i,start = 0;
    for(i=0;i<a.length();i++){
        if(a[i]==' '){
            reverse(a.begin()+start,a.begin()+i);
            start = i+1;
        }

    }
    reverse(a.begin()+start, a.end());
    reverse(a.begin(), a.end());

    cout<<a;

}

int main()
{

    str_word();


}


