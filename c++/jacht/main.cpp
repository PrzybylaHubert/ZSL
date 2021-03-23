#include <iostream>
#include <cstdlib>
#include <vector>
using namespace std;

struct Jacht{
	int pojemnosc;
	int paliwo;
	int dystans;
	
	Jacht(){
		pojemnosc = rand()%400+100;
		paliwo = rand()%150+50;
		dystans = paliwo*200/pojemnosc;
	}
	
	Jacht(int a, int b){
		pojemnosc = a;
		paliwo = b;
		dystans = a*200/b;
	}
	
	void wyswietl(){
		cout<<"pojemnosc: "<<pojemnosc<<" paliwo: "<<paliwo<<" dystans: "<<dystans<<endl;
	}
	
	int zwroc_poj(){return pojemnosc;}
	int zwroc_pal(){return paliwo;}
	int zwroc_dys(){return dystans;}
	
	void zwieksz_paliwo(int a){
		paliwo+=a;
		dystans=paliwo*200/pojemnosc;
	}
};

int main(int argc, char** argv) {
	Jacht test;

	test.wyswietl();
	test.zwieksz_paliwo(100);
	test.wyswietl();
	
	vector <Jacht> Jachty;
	
	for(int i=0; i<20; i++){
		Jachty.push_back(Jacht());
	}
	
	cout<<endl;
	
	for(int i=0; i<20; i++){
		Jachty[i].wyswietl();
	}
	
	int maks=0;
	
	for(int i=0; i<Jachty.size(); i++){
        if (Jachty[i].dystans>maks){
    		maks=Jachty[i].dystans;
        }
	}
    cout<<"maksymalny dystans: "<<maks<<endl;
	
	return 0;
}
