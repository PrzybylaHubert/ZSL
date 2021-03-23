#include <iostream>
#include <stdlib.h> 
#include <vector>
#include <stack>
#include <queue>

using namespace std;

struct Zwierze{
	int typ;
	int rozmiar;
	bool miesozerny;
	
	void losuj_zwierze(){
		typ=rand()%10+1;
		rozmiar=rand()%16+1;
	}
	
	Zwierze(){
		losuj_zwierze();
		if(typ<5)
			miesozerny=1;
		else
			miesozerny=0;
	}
	
	void wyswietl_info(){
		cout <<"typ zwierzecia: "<< typ << " rozmiar: " << rozmiar << " czy miesozerny: " << miesozerny<<endl; 
	}
	
	int rt(){ return typ;}
	int rr(){return rozmiar;}
	bool rm(){return miesozerny;}
};

struct ZOO{
	vector <Zwierze> v_z;
	queue <Zwierze> q_z_m;
	stack <Zwierze> s_z_r;
	
	ZOO(int l){
		for(int i=0;i<l;i++){
			v_z.push_back(Zwierze());
		}
	}
	
	void wyswietl(){
		for(int i=0;i<v_z.size();i++){
			v_z[i].wyswietl_info();
		}
	}
	
	/*void wyswietl2(){
		auto ite=v_z,begin();
		for(ite; ite!=v_z.end(); ite++){
			ite>wyswietl.info();
		}
	}*/
	
	/*void wyswietl3(){
		for(auto value : v_z){
			value.wyswietl_info();
		}
	}*/
	
	int liczba_rodzaju(){
		int miesozercy = 0;
		for(int i=0;i<v_z.size();i++){
			if(v_z[i].rm()==1)
				miesozercy++;
		}
		return miesozercy;
	}
	
	void generuj_kolejke(){
		for(int i=0; i<v_z.size(); i++){
			if(v_z[i].miesozerny==1)
				q_z_m.push(v_z[i]);
			else
				s_z_r.push(v_z[i]);
		}
	}
	
	void liczb_w_kolejkach(){
		cout<<"miesozercy: "<<q_z_m.size()<<endl;
		cout<<"roslinozercy: "<<s_z_r.size()<<endl;
		
	}
	
	void nakarm_roslinozerne(){
		while(!s_z_r.empty()){
			s_z_r.top().wyswietl_info();
			s_z_r.pop();
		}
	}
	
	void nakarm_miesozerne(){
		while(!q_z_m.empty()){
			q_z_m.front().wyswietl_info();
			q_z_m.pop();
		}
	}
};

void wypelnij_tablice(Zwierze tab[], int rozmiar){
	for(int i=0; i<rozmiar; i++){
		Zwierze a;
		tab[i] = a;
	}
}

void wyswietl_tablice(Zwierze tab[], int rozmiar){
	for(int i=0; i<rozmiar; i++)
		tab[i].wyswietl_info();
}

int najwiekszy_rozmiar(Zwierze tab[], int rozmiar){
	int maks = 0;
	for (int i=0; i<rozmiar; i++){
		if(tab[i].rozmiar>maks)
			maks = tab[i].rozmiar;
	}
	return maks;
}

void gdzie_wiecej(ZOO a, ZOO b){
	int x = a.liczba_rodzaju();
	int y = b.liczba_rodzaju();
	if(x>y)
		cout<<"w zoo 1 jest wiecej miesozercow"<<endl;
	else if(y>x)
		cout<<"w zoo 2 jest wiecej miesozercow"<<endl;
	else
		cout<<"jest tyle samo"<<endl;
}

int main(int argc, char** argv) {
	
	Zwierze* tab;
	int roz;
	cin>>roz;
	tab = new Zwierze[roz];
	
	wypelnij_tablice(tab,roz);
	wyswietl_tablice(tab,roz);
	cout<<najwiekszy_rozmiar(tab,roz)<<endl;
	
//wektory
	cout<<endl;
				
	vector <int> wektor;
	for(int i=0; i<5; i++){
		wektor.push_back(rand()%100);
	}
	
	for(int i=0; i<wektor.size(); i++){
		cout<<wektor[i]<<endl;	
	}
	
	cout<<endl;
	
	wektor.erase(wektor.begin()+3);
		for(int i=0; i<wektor.size(); i++){
		cout<<wektor[i]<<endl;	
	}
	cout<<endl<<"ZOO: "<<endl;
	
	ZOO zoo1(15);
	ZOO zoo2(20);
	
	zoo1.wyswietl();
	
	cout<<"miesozercy: "<<zoo1.liczba_rodzaju()<<endl;
	cout<<"roslinozercy: "<<15-zoo1.liczba_rodzaju()<<endl;
	cout<<endl<<endl;
	
	zoo1.generuj_kolejke();
	
	zoo1.liczb_w_kolejkach();
	cout<<endl<<"karmienie: "<<endl;
	zoo1.nakarm_roslinozerne();
	cout<<endl<<endl;
	zoo1.nakarm_miesozerne();
	zoo1.v_z.clear();
	cout<<endl<<"wyczyszczone zoo1: "<<zoo1.v_z.size()<<endl;
	gdzie_wiecej(zoo1,zoo2);
	 
	return 0;
}
